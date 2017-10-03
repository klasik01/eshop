<?php

namespace App\AdminModule\Presenters;

use Nette\Security\User;
use Nette\Application\ForbiddenRequestException;

class SecuredPresenter extends BasePresenter {

    /**
     * (non-phpDoc)
     *
     * @see Nette\Application\Presenter#startup()
     */
    protected function startup() {
        parent::startup();
        if (!$this->user->isLoggedIn()) {
            if ($this->user->getLogoutReason() === User::INACTIVITY) {
                $this->flashMessage('Odhlášení!', 'Byl jsi odhlášen, protože jsi nebyl dlouho aktivní.', 'danger');
            }
            $this->flashMessage('Pozor!', 'Pro vstup do této části webu se musíš přihlásit.', 'warning');
            $backlink = $this->storeRequest();
            $this->redirect('Auth:default', array('backlink' => $backlink));
        } else {
            if (!$this->user->isAllowed('administrace', $this->getAction())) {
                throw new ForbiddenRequestException('Pro vstup do této sekce nemáte dostatečné oprávnění.');
                //$this->flashMessage('Pro vstup do této sekce nemáte dostatečné oprávnění.', 'warning');
                //$backlink = $this->storeRequest();
                //$this->redirect('Auth:default', array('backlink' => $backlink));
            }
        }
    }

}
