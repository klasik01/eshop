<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Forms;

use Nette\Object;
use App\Model\Facades\CartFacade;
use Kasika\Main\IBaseFormFactory;
use Nette\Forms\Form;
use Nette\Database\Context;

/**
 * Description of OrderFormFactory
 *
 * @author Stanislav
 */
class OrderFormFactory extends Object {

    /** @var Context @inject */
    private $database;

    /** @var CartFacade */
    private $cartFacade;

    /** @var IBaseFormFactory */
    private $baseFormFactory;

    function __construct(CartFacade $cartFacade, IBaseFormFactory $baseFormFactory) {
        $this->cartFacade = $cartFacade;
        $this->baseFormFactory = $baseFormFactory;
    }

    public function create() {
        $form = $this->baseFormFactory->create();
        $form->addGroup('Kontakt');
        $form->addText("name", "Jméno:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("surname", "Příjmení:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("tel", "Tel::")->setAttribute("class", "form-control")->setRequired();
        $form->addEmail("email", "Email:")->setAttribute("class", "form-control")->setRequired();
        $form->addGroup("Fakturační Adresa");
        $form->addText("street", "Ulice:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("city", "Město:")->setAttribute("class", "form-control")->setRequired();
        $form->addText("zip", "PSČ:")->setAttribute("class", "form-control")->setRequired();
        $form->addGroup("Dodat na jinou adresa");
        $form->addCheckbox("onOtherAddress", "Objednat na jinou adresu")
                ->setAttribute("class", "onOtheraddress")
                ->addCondition($form::EQUAL, TRUE)
                ->toggle("other_address");
        $form->addText("o_street", "Ulice:")->setAttribute("class", "form-control");
        $form->addText("o_city", "Město:")->setAttribute("class", "form-control");
        $form->addText("o_zip", "PSČ:")->setAttribute("class", "form-control");
        $form->addGroup("Objednat na firmu");
        $form->addCheckbox("onFirm", "Objednat na firmu")
                ->setAttribute("class", "onFirm")
                ->addCondition($form::EQUAL, TRUE)
                ->toggle("on_firm");
        $form->addText("f_name", "Název firmy:")->setAttribute("class", "form-control");
        $form->addText("ic", "IČ:")->setAttribute("class", "form-control");
        $form->addText("dic", "DIČ:")->setAttribute("class", "form-control");
        $form->addRadioList("travel", "Vyberte způsob dopravy", [
            "1" => "Osobní výběr 0 Kč",
            "2" => "Vlastní rozvoz po ČR 100 Kč"
        ])->setRequired();
        $form->addRadioList("payment", "Vyberte způsob Platby", [
            "1" => "Hotovost 0 Kč",
            "2" => "Bankovní převod 0 Kč"
        ])->setRequired();
        $form->addSubmit("submit", "Souhrn objednávky")->setAttribute("class", "pull-right btn btn-primary btn-lg");
        $form->onSuccess[] = $this->process;
        return $form;
    }

    public function process(Form $form) {
        $this->cartFacade->save($form->values);
    }

}
