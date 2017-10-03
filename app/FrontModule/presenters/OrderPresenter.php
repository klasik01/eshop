<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

use App\FrontModule\Forms\OrderFormFactory;
use App\FrontModule\Forms\SummaryFormFactory;
use Kasika\ShopCart\Cart;
use Kasika\VlastniExport\Faktura;

/**
 * Description of OrderPresenter
 *
 * @author Stanislav
 */
class OrderPresenter extends BasePresenter {

    /** @var OrderFormFactory @inject */
    public $orderFormFactory;

    /** @var SummaryFormFactory @inject */
    public $summaryFormFactory;

    /** @var Cart @inject */
    public $cart;

    public function actionDefault() {
        if ($this->cart->empty) {
            $this->redirect('Cart:Default');
        }
    }

    public function actionSummary() {
        if ($this->cart->empty && !isset($_SESSION['id_radku'])) {
            $this->redirect('Cart:Default');
        }
        $summary = $this->database->table("souhrn")->get($_SESSION['id_radku']);
        $this->template->order = $summary;
        $this->template->carts = $this->cart;
        $this->template->travel = $this->database->table('doprava')->get($summary->travel);
        $this->template->payment = $this->database->table('platba')->get($summary->payment);
    }

    protected function createComponentOrderForm() {
        $form = $this->orderFormFactory->create();
        $form->onSuccess[] = function() {
            $this->redirect('Order:Summary');
        };
        return $form;
    }

    protected function createComponentSummaryOrder() {
        try {
            $form = $this->summaryFormFactory->create();
            $form->onSuccess[] = function() {
                $this->flashMessage("Operace proběhla úspěšně", "Děkujeme za Vaši objednávku", "success");
                $this->redirect('Homepage:default');
            };
        } catch (Exception $ex) {
            $this->flashMessage("Došlo k chybě", "Při vytváření objednávky došlo k chybě. Prosíme opakujte objednávku", "danger");
            $this->redirect('Homepage:default');
        }
        return $form;
    }

}
