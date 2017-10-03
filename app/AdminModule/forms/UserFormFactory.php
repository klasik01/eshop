<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Forms;

use Nette\Database\Context;
use Kasika\Main\IBaseFormFactory;
use Nette\Forms\Form;
use Nette\InvalidArgumentException;
use Nette\Security\Passwords;
use Nette\Utils\ArrayHash;

/**
 * Description of UserFormFactory
 *
 * @author Stanislav
 */
class UserFormFactory extends BaseFormFactory {

    protected $table = 'user';
    private $roles;

    function __construct(array $roles, Context $database, IBaseFormFactory $baseFormFactory) {
        parent::__construct($database, $baseFormFactory);
        $this->roles = $roles;
    }

    protected function setupForm(Form $form) {
        $uniqueValidator = new UniqueValidator($this->database->table($this->table), $this->getId());

        $form->addText('name', 'Jméno')
                ->setRequired()
                ->setAttribute("class", "form-control");
        $form->addEmail('email', 'Email')
                ->setRequired()
                ->addRule($uniqueValidator->validate, 'Tento email je již používaný.')
                ->setAttribute("class", "form-control");
        $form->addPassword('password', 'Password')
                ->setAttribute("class", "form-control")
                ->addCondition(Form::FILLED)->addRule(Form::MIN_LENGTH, NULL, 6);
        $roles = array_combine($this->roles, $this->roles);
        $form->addRadioList('role', 'Role', $roles)
                ->setRequired();
        $form->addSubmit('submit', 'Submit')
                ->setAttribute("class", "form-control btn btn-primary btn-lg");
        $this->onPreSave[] = $this->newpassword;
    }

    public function newpassword(ArrayHash $values) {
        if ($values->password) {
            $values->password = Passwords::hash($values->password);
        } else {
            unset($values->password);
        }
    }

}
