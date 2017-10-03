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
use Nette\Utils\ArrayHash;

/**
 * Description of ProductFormFactory
 *
 * @author Stanislav
 */
class ProductFormFactory extends BaseFormFactory {

    /** @var string */
    protected $table = 'produkty';

    /** @var string */
    protected $uploadManager;
    private $database;

    function __construct(Context $database, IBaseFormFactory $baseFormFactory, UploadManager $uploadManager) {
        $this->uploadManager = $uploadManager;
        parent::__construct($database, $baseFormFactory);
        $this->database = $database;
    }

    protected function setupForm(Form $form) {
        $catArray = array();
        $cat = $this->database->table('kategorie');
        foreach ($cat as $item) {
            array_push($catArray, array($item->id => $item->nazev));
        }
        $form->addText('nazev', 'Název')->setRequired("Název je povinný",TRUE)->setAttribute("class", "form-control");
        $form->addSelect("id_kategorie", "Kategorie", $catArray)->setRequired()->setAttribute("class", "form-control");
        $form->addText("kratky_popis", "Krátký popis")->setRequired()->setAttribute("class", "form-control");
        $form->addTextArea('dlouhy_popis', 'Popis')->setAttribute('class', 'editor-standard')->setAttribute("class", "form-control");
        $form->addUpload('fotografie', 'Obrázek')->addCondition(Form::FILLED)->addRule(Form::IMAGE);
        $form->addSelect("material", "Materiál", array("DTD","Masiv"))->setRequired()->setAttribute("class", "form-control");
        $form->addSelect("typ_ulu", "Typ úlu", array("42x17","39x24"))->setRequired()->setAttribute("class", "form-control");
        $form->addInteger("cena", "Cena (s DPH)")->setRequired()->setAttribute("class", "form-control");
        $form->addInteger("sleva", "Sleva")->setRequired()->setAttribute("class", "form-control");
        $form->addCheckbox("aktivni", "Aktivní")->setAttribute("class", "form-control");
        $form->addSubmit("create", "Vytvořit")->setAttribute("class", "form-control btn btn-primary btn-lg");
        $this->onPreSave[] = $this->saveImage;
    }

    public function saveImage(ArrayHash $values) {
        $image = $this->uploadManager->save($values->fotografie);
        if ($image) {
            $values->fotografie =  $image['src'];
        } else {
            unset($values->fotografie);
        }
    }

}
