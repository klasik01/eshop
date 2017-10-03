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
 * Description of AlbumFormFactory
 *
 * @author Stanislav
 */
class ImageFormFactory extends BaseFormFactory {

    protected $table = 'galerie';
    protected $uploadManager;
    private $database;

    function __construct(Context $database, IBaseFormFactory $baseFormFactory, UploadManager $uploadManager) {
        parent::__construct($database, $baseFormFactory);
        $this->database = $database;
        $this->uploadManager = $uploadManager;
    }

    protected function setupForm(Form $form) {
        $array = [];
        $data = $this->database->table("galerie_slozka");
        foreach($data as $item) {
            array_push($array, array($item->id => $item->nazev));
        }
        
        $form->addText("nazev", "Název alba")->setAttribute("class", "form-control")->setRequired();
        $form->addUpload('url', 'Image')->addCondition(Form::FILLED)->addRule(Form::IMAGE);
        $form->addCheckbox("aktivni")->setAttribute("data-toggle", "toggle")->setAttribute("class", "pull-right");
        $form->addSelect("kategorie", "Kategorie:", $array);
        $form->addSubmit("submit", "Uložit")->setAttribute("class", "form-control btn btn-primary btn-lg");
        $this->onPreSave[] = $this->saveImage;
    }

    public function saveImage(ArrayHash $values) {
        $image = $this->uploadManager->save($values->url);
        if ($image) {
            $values->url = $image['src'];
        } else {
            unset($values->url);
        }
    }

}
