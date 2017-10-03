<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;
use Nette\Application\UI\Form;
/**
 * Description of ContactPresenter
 *
 * @author Stanislav
 */
class ContactPresenter extends BasePresenter {

    private $db;

    public function __construct(\Nette\Database\Context $db) {
        parent::__construct($db);
        $this->db = $db;
    }

    public function renderDefault() {
        $this->template->context = $this->db->table("article")->get(25);
        $this->template->data = $this->db->table("mojeudaje")->get(1);
    }

    public function createComponentContactForm() {
        $form = new Form();
        $form->setMethod("post");
        $form->addText("name", "Jméno:")->setAttribute("class", "form-control");
        $form->addText("surname", "Příjmení:")->setAttribute("class", "form-control");
        $form->addText("subject", "Předmět::")->setAttribute("class", "form-control");
        $form->addEmail("email", "Email:")->setAttribute("class", "form-control");
        $form->addTextArea("content", "Zpráva:")->setAttribute("class", "form-control");

        $form->addSubmit("send", "Odeslat")->setAttribute("class", "form-control btn btn-primary");
        $form->onSuccess[] = [$this, "contactFormSuccess"];

        return $form;
    }

    public function contactFormSuccess($form, $values) {
        try {
            $this->flashMessage("Děkujeme za Vaši zprávu", "odeslána", "success");
            $this->redirect("this");
        } catch (Exception $ex) {
            $this->flashMessage("Chyba");
        }
    }

}
