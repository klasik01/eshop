<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use Nette\Database\Context;
use App\AdminModule\Forms\UserFormFactory;
use App\AdminModule\Forms\ContactFormFactory;
use Nette\InvalidArgumentException;
use Nette\Application\UI\Form;

/**
 * Description of SettingPresenter
 *
 * @author Stanislav
 */
class SettingsPresenter extends BasePresenter {

    /** @var UserFormFactory @inject */
    public $formFactory;

    /** @var ContactFormFactory @inject */
    public $contactFormFactory;

    /** @var Context @inject */
    public $database;
    private $id;
    private $id_user;

    public function actionDefault() {
        
    }

    public function actionUsers() {
        if (!$this->user->isInRole("admin")) {
            $this->flashMessage("Neodstatečná oprávnění", "Máte nedodstatečná orpávnění pro vstup do této složky", "danger");
            $this->redirect("Homepage:Default");
        } else {
            $this->template->users = $this->database->table('user');
        }
    }

    public function actionUpdateuser($id) {
        if (!$this->user->isInRole("admin")) {
            $this->flashMessage("Neodstatečná oprávnění", "Máte nedodstatečná orpávnění pro vstup do této složky", "danger");
            $this->redirect("Homepage:Default");
        } else {
            $this->id_user = $id;
        }
    }

    public function actionContact() {
        $this->template->contact = $this->database->table('mojeudaje')->get(1);
    }

    public function createComponentFormUser() {
        try {
            $form = $this->formFactory->create($this->id_user);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Uživatel uložen", "Uživatel byl úspěšně uložen", "success");
            $this->redirect("users");
        };
        return $form;
    }

    public function createComponentFormContact() {
        try {
            $form = $this->contactFormFactory->create(1);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Data uložena", "Kontaktní údaje uloženy super!", "success");
            $this->redirect("contact");
        };
        return $form;
    }

    public function handleDeleteuser($id) {
        $user = $this->database->table('user')->get($id);

        if ($user) {
            if ($this->user->id !== $user->id) {
                try {
                    $this->database->table('user')->where("id", $id)->fetch()->delete();
                    $this->flashMessage("OK", "Uživatel byl smazán", "success");
                    $this->redirect("users");
                } catch (Nette\InvalidArgumentException $e) {
                    $this->flashMessage("Chyba", "Při smazání došlo k chybě", "danger");
                    $this->redirect("users");
                }
            } else {
                $this->flashMessage("Chyba", "Při smazání došlo k chybě", "danger");
                $this->redirect("users");
            }
        } else {
            $this->flashMessage("Chyba", "Uživatel nemůže smazat sám sebe", "danger");
            $this->redirect("users");
        }
    }

}
