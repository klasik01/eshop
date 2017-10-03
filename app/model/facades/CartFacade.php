<?php

namespace App\Model\Facades;

use Nette\Database\Context;
use Nette\InvalidArgumentException;
use Nette\Object;
use Kasika\ShopCart\Cart;
use Kasika\VlastniExport\Faktura;

/**
 * Description of CartFacade
 *
 * @author Stanislav
 */
class CartFacade extends Object {

    /** @var Context */
    private $database;

    /** @var  Cart */
    private $cart;

    function __construct(Context $database, Cart $cart) {
        $this->database = $database;
        $this->cart = $cart;
    }

    public function add($id, $quantity = 1) {
        $product = $this->database->table('produkty')->get($id);

        if (!$product) {
            throw new InvalidArgumentException('Produkt nenalezen');
        }

        $this->cart->addItem($product->id, $product->cena, $quantity, $product->sleva)
                ->setName($product->nazev)
                ->setImage($product->fotografie)
                ->setType($product->typ_ulu)
                ->setMaterial($product->material)
                ->setLink('Product:Product');
    }

    public function save($order) {
        $sum = [
            "name" => $order->name,
            "surname" => $order->surname,
            "tel" => $order->tel,
            "email" => $order->email,
            "street" => $order->street,
            "city" => $order->city,
            "zip" => $order->zip,
            "o_street" => $order->o_street,
            "o_city" => $order->o_city,
            "o_zip" => $order->o_zip,
            "dodaci" => $order->onOtherAddress,
            "onFirm" => $order->onFirm,
            "f_name" => $order->f_name,
            "ic" => $order->ic,
            "dic" => $order->dic,
            "travel" => $order->travel,
            "payment" => $order->payment
        ];
        $row = $this->database->table('souhrn')->insert($sum);
        $_SESSION['id_radku'] = $row->id;
    }

    public function createOrder() {

        try {
            $this->database->beginTransaction();
            $order = $this->database->table("souhrn")->get($_SESSION['id_radku']);
            $adresat = [
                "email" => $order->email,
                "tel" => $order->tel,
                "jmeno" => $order->name,
                "prijmeni" => $order->surname,
                "nazev_firmy" => $order->f_name,
                "ic" => $order->ic,
                "dic" => $order->dic
            ];

            $fakturacni = [
                "ulice" => $order->street,
                "mesto" => $order->city,
                "psc" => $order->zip,
                "typ" => 0
            ];
            $dodaci = [
                "ulice" => $order->o_street,
                "mesto" => $order->o_city,
                "psc" => $order->o_zip,
                "typ" => 1
            ];

            $newAdresat = $this->database->table("adresat")->insert($adresat);
            $newAdresaF = $this->database->table("adresa")->insert($fakturacni);
            if ($order->dodaci === 1) {
                $newAdresaD = $this->database->table("adresa")->insert($dodaci);
            } else {
                $newAdresaD = $newAdresaF;
            }

            $mojeudaje = $this->database->table("mojeudaje")->get(1);
            $dodavatel = [
                "nazev" => "IROPE s.r.o",
                "jmeno" => $mojeudaje->jmeno . " " . $mojeudaje->prijmeni,
                "tel" => $mojeudaje->tel,
                "email" => $mojeudaje->email,
                "ulice" => $mojeudaje->ulice,
                "mesto" => $mojeudaje->mesto,
                "psc" => $mojeudaje->psc,
                "ic" => $mojeudaje->ic,
                "dic" => $mojeudaje->dic,
                "nazev_banky" => "Česká spořitelna",
                "cislo_uctu" => "78956458",
                "kod_banky" => "0800",
            ];

            $objednavka = [
                "celkova_cena" => $this->cart->total + $order->ref("doprava", "travel")->cena + $order->ref("platba", "payment")->cena,
                "id_adresata" => $newAdresat->id_adresata,
                "id_fakturacni" => $newAdresaF->id,
                "id_dodaci" => $newAdresaD->id,
                "id_platba" => $order->payment,
                "id_doprava" => $order->travel,
            ];
            $newOrder = $this->database->table('objednavky')->insert($objednavka);
            foreach ($this->cart->getItems() as $key => $item) {
                $backet = [
                    "id_vyrobku" => $item->id,
                    "id_objednavka" => $newOrder->id_objednavky,
                    "mnozstvi" => $item->quantity,
                    "cena" => $item->price
                ];
                $this->database->table("kosik")->insert($backet);
            }

            $mpdf = new \mPDF();
            $fakturaController = new Faktura();
            $mpdf->WriteHTML($fakturaController->printCSS(), 1);
            $mpdf->WriteHTML($fakturaController->printIssues($adresat, $dodaci, $fakturacni, $this->cart->getItems(), $order->ref("doprava", "travel")->cena, $order->ref("platba", "payment")->cena, $dodavatel, $newOrder->id_objednavky));
            $faktura = $mpdf->Output("objednavky/faktura-" . $newOrder->id_objednavky . "_" . date("d-m-Y") . ".pdf");

            $this->database->query("UPDATE objednavky SET faktura = ? WHERE id_objednavky = ?", "objednavky/faktura-" . $newOrder->id_objednavky . "_" . date("d-m-Y") . ".pdf", $newOrder->id_objednavky);
            file_put_contents(json_encode($faktura->name), $faktura);

            $this->cart->clear();
            $this->database->table('souhrn')->delete($_SESSION['id_radku']);
            $this->database->commit();
            unset($_SESSION['id_radku']);
            
        } catch (Exception $ex) {
            $this->database->rollBack();
            
        }
    }

}
