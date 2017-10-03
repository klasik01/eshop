<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Forms;

use Kasika\Main\IBaseFormFactory;
use Nette\Forms\Form;
/**
 * Description of ContactFormFactory
 *
 * @author Stanislav
 */
class ContactFormFactory  extends BaseFormFactory{

    protected $table = 'mojeudaje';
    
    function __construct(\Nette\Database\Context $database, IBaseFormFactory $baseFormFactory) {
        parent::__construct($database, $baseFormFactory);
    }
    protected function setupForm(Form $form) {
        $form->addText("ulice", "Ulice:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("mesto", "Město:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("psc", "PSČ:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("tel", "Tel:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("email", "Email:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("ic", "IČ:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("dic", "DIČ:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("jmeno", "Jméno:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("prijmeni", "Příjmení:")->setAttribute("class", "form-control")->setRequired();
        $form->addSubmit("submit", "Uložit:")->setAttribute("class", "form-control btn btn-primary btn-lg");
    }

}
