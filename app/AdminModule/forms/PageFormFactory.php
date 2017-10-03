<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Forms;

use Kasika\Main\IBaseFormFactory;
use Nette\Database\Context;
use Nette\Forms\Form;


/**
 * Description of PageFormFactory
 *
 * @author Stanislav
 */
class PageFormFactory extends BaseFormFactory {
    
    protected $table = 'article';
    
    private $database;
    
    function __construct(Context $database, IBaseFormFactory $baseFormFactory) {
        parent::__construct($database, $baseFormFactory);
        $this->database = $database;
    }

    protected function setupForm(Form $form) {
        $form->addText("title", "Titulek")->setAttribute("class", "form-control")->setRequired();
        $form->addText("description", "Popis")->setAttribute("class", "form-control")->setRequired();
        $form->addTextArea("content", "Obsah")->setAttribute("class", "form-control");
        $form->addInteger("robots", "Vidět roboty")->setAttribute("class", "form-control")->setRequired();
        $form->addSubmit("submit", "Uložit")->setAttribute("class", "form-control btn btn-primary btn-lg");  
    }

}
