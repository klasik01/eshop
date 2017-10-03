<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use App\AdminModule\Forms\ProductFormFactory;
use Nette\InvalidArgumentException;
use Nette\Database\Context;
use Nette\Application\UI\Form;

/**
 * Description of ProductPresenter
 *
 * @author Stanislav
 */
class ProductPresenter extends BasePresenter {

    /** @var ProductFormFactory @inject */
    public $formFactory;

    /** @var Context @inject */
    public $database;
    private $id;

    public function actionDefault() {
        $this->template->product = $this->database->table("produkty")->where("NOT id", 13);
    }

    public function actionUpdate($id) {
        $this->id = $id;
    }

    protected function createComponentForm() {
        try {
            $form = $this->formFactory->create($this->id);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Produkt vytvořen", "Produkt byl úspěšně vytvořen nebo aktualizován", "success");
            $this->redirect('default');
        };
        return $form;
    }

    public function handleActive($id, $status) {
        if ($this->isAjax()) {
            $product = $this->database->table('produkty')->get($id);
            try {
                if ($product) {
                    $this->database->query("UPDATE produkty SET aktivni = ? WHERE id = ?", $status, $id);
                    $this->flashMessage("Změna provedena", "Produkt " . $product->nazev . " byl změněn", "success");
                    //$this->redirect("this");
                } else {
                    $this->flashMessage("Chyba", "Produkt s id = " . $id . " nebyl nalezen", "danger");
                }
            } catch (\Nette\Neon\Exception $ex) {
                $this->flashMessage("Chyba", "Při operaci došlo k chybě", "danger");
            }
        } else {
            $this->flashMessage("Chyba", "Nastale neočekávaná chyba. Potřeba zkontrolovat jestli funguje AJAX", "danger");
            //$this->redirect("this");
        }
    }

    public function handleDelete($id) {
        $product = $this->database->table('produkty')->get($id);
        $kosik = $this->database->table("kosik")->where("id_vyrobku", $id);
        if ($product) {
            try {
                foreach ($kosik as $item) {
                    $this->database->query("UPDATE kosik SET id_vyrobku = ? WHERE id_vyrobku = ?", NULL, $item->id);
                }

                $this->database->table('produkty')->where("id", $id)->fetch()->delete();
                $this->flashMessage("OK", "Produkt byl smazán", "success");
                $this->redirect("default");
            } catch (Nette\InvalidArgumentException $e) {
                $this->flashMessage("Chyba", "Při smazání došlo k chybě", "danger");
                $this->redirect("default");
            }
        } else {
            $this->flashMessage("Chyba", "Při smazání došlo k chybě", "danger");
            $this->redirect("default");
        }
    }

    public function actionDetail($id) {
        $this->template->product = $this->database->table('produkty')->get($id);
    }

}
