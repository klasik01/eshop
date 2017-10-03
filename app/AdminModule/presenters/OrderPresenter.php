<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use Nette\Database\Context;
use Nette\Application\UI\Form;

/**
 * Description of OrderPresenter
 *
 * @author Stanislav
 */
class OrderPresenter extends BasePresenter {

    /** @var Context @inject */
    public $database;
    public $id;

    public function actionDefault() {
        $order = $this->database->table("objednavky");
        $this->template->orders = $order;
    }

    public function actionList($name) {
        switch ($name) {
            case "all":
                $this->template->orders = $this->database->table('objednavky');
                break;
            case "active":
                $this->template->orders = $this->database->table('objednavky')->where("status", 0);
                break;
            case "complete":
                $this->template->orders = $this->database->table('objednavky')->where("status", 1);
                break;
        }
    }

    public function actionDetail($id) {
        $this->id = $id;
        $this->template->order = $this->database->table('objednavky')->get($id);
        $this->template->bascet = $this->database->table('kosik')->where('id_objednavka', $id)->where("NOT id_vyrobku", "NULL");
    }

    public function createComponentStatusForm() {
        $form = new Form();
        $form->setMethod('POST');
        $form->addSelect("status", "Status", [
            "1" => "Dokončeno",
            "0" => "Ve výrobě"
        ])->setAttribute("class", "form-control");
        $form->addSubmit("save", "Uložit změnu")->setAttribute("class", "btn btn-danger btn-lg");
        $form->onSuccess[] = [$this, 'statusSuccess'];
        return $form;
    }

    public function statusSuccess(Form $form) {
        try {
            $this->database->query("UPDATE objednavky SET status = ? WHERE id_objednavky = ?", $form->values->status, $this->id);
            $this->flashMessage("OK", "Vše proběhlo v pořádku", "success");
            $this->redirect("Order:Default");
        } catch (Grido\Exception $ex) {
            $this->flashMessage("Chyba", "Při aktualizaci došlo k chybě", "danger");
            $this->redirect("this");
        }
    }
}
