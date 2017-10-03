<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

use Nette\Database\Context;
/**
 * Description of HomepagePresenter
 *
 * @author Stanislav
 */
class HomepagePresenter extends BasePresenter {
    
    /** @var Context @inject */
    public $database;
    
    public function actionDefault() {
        
    }
    
    public function actionConditions () {
        $this->template->context = $this->database->table("article")->get(31);
    }
}
