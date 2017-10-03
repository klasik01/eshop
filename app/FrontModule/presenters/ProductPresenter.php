<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

use App\FrontModule\Forms\CartFormFactory;
use Nette\Database\Context;
/**
 * Description of ProductPresenter
 *
 * @author Stanislav
 */
class ProductPresenter extends BasePresenter {

    /** @var Context @inject */
    public $database;
    
    /** @var CartFormFactory @inject */
    public $cartFormFactory;
    
    /** int */
    private $productId;


    public function renderCategory($id) {

        $this->template->products = $this->database->table('produkty')->where("id_kategorie", $id)->where("aktivni", "1");
        $this->template->category = $this->database->table("kategorie")->get($id);
    }

    public function renderDefault() {
        $this->template->products = $this->database->table('produkty')->where("NOT id_kategorie", 13);
    }

    public function actionProduct($id) {
        $product = $this->database->table('produkty')->get($id);
        if(!$product) {
            $this->flashMessage("Produkt nenalezen", "Produkt nebyl nalezen, byla zadána špatná hodnota", "danger");
            $this->redirect("Product:Default");
        }            
        $this->template->product = $product;
        $this->productId = $id;
    }

    public function createComponentCartForm() {
        $form = $this->cartFormFactory->create($this->productId);
        $form->onSuccess[] = function() {
        $this->redirect('Cart:default');
        };
        return $form;

    }
    
    

    

}
