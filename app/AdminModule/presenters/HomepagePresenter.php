<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use Nette\Database\Context;
/**
 * Description of HomepagePresenter
 *
 * @author Stanislav
 */
class HomepagePresenter extends BasePresenter {
    
    /** @var Context @inject */
    public $database;
    
    public function renderDefault() {
        $orderList = $this->database->table("objednavky");
        $this->template->order_count = $this->database->table("objednavky")->where("status", "0")->count();
        $this->template->product_count = $this->database->table("produkty")->where("aktivni", "1")->count();
        $this->template->article_count = $this->database->table("article")->count();
        $this->template->albums_count = $this->database->table("galerie_slozka")->count();
    }
}
