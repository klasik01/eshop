<?php

namespace App\AdminModule\Presenters;

use Nette;
use App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    protected function beforeRender() {
        if($this->isAjax()) {
            $this->redrawControl('flash');
        }
    }
    
    protected function startup() {
        parent::startup();
        if (!$this->user->isLoggedIn()) {
            $this->flashMessage("ERR", "Nejsi přihlášen", "danger");            
            $this->redirect('Auth:Default');
        }
        $user = $this->user->getIdentity();
        $this->template->username = $user->name;
    }

}
