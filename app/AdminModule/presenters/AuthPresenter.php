<?php

/**
 * Description of AuthPresenter
 *
 * @author Michal
 */

namespace App\AdminModule\Presenters;

use Nette\Application\UI\Form;
use Nette\Security\AuthenticationException;
use Nette\Security\IIdentity;

class AuthPresenter extends \Nette\Application\UI\Presenter {

    /** @persistent */
    public $backlink = '';
    public function renderDefault() {
        
    }

    protected function createComponentLoginForm() {
        $form = new Form();
        $form->addEmail('email', 'Email')->setRequired('Prosím zadajte registrační email.');
        $form->addPassword('password', 'Heslo')->setRequired('Prosím zadajte heslo.');
        $form->addCheckbox("remember", "Zapamatuj si mě na tomto počítači");
        //$form->addProtection('Prosím odešlete přihlašovací údaje znovu.');
        $form->addSubmit('submit', 'Přihlásit')->getControlPrototype()->class('button');
        $form->onSuccess[] = array($this, 'loginFormSubmitted');
        return $form;
    }

    public function loginFormSubmitted(Form $form) {
        try {
            $values = $form->getValues();
            if ($values->remember) {
                $this->user->setExpiration("+ 14 days", FALSE);
            } else {
                $this->user->setExpiration("+ 30 minutes", TRUE);
            }
            $this->user->login($values->email, $values->password);
            $this->flashMessage("OK","Byl jsi přihlášen.", "success");
            $this->restoreRequest($this->backlink);
            $this->redirect('Homepage:default');
        } catch (AuthenticationException $e) {
            $this->flashMessage("","Chyba",$e->getMessage(), "danger");
            //$form->addError($e->getMessage());
        }
    }

    public function actionLogout() {
        $this->user->logout(TRUE);
        $this->flashMessage('Odhlášen!','Byl jsi odhlášen.', "success");      
            $this->redirect('Auth:');
    }
}
