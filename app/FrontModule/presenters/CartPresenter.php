<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

use Kasika\ShopCart\ICartControlFactory;
use Nette\Database\Context;
use App\Model\Facades\CartFacade;
use Nette\InvalidArgumentException;

/**
 * Description of CartPresenter
 *
 * @author Stanislav
 */
class CartPresenter extends BasePresenter {

    /** @var ICartControlFactory @inject */
    public $cartcontrolFactory;

    /** @var CartFacade @inject */
    public $cartFacade;

    public function actionAdd($id) {
        try {
            $this->cartFacade->add($id);
        } catch (Exception $ex) {
            $this->error($e->getMessage());
        }
        $this->redirect('default');
    }

    protected function createComponentCartControl() {
        $cart = $this->cartcontrolFactory->create();
        $cart->onClickContinue[] = function() {
            $this->redirect('Homepage:default');
        };

        $cart->onClickNext[] = function() {
            $this->redirect('Order:default');
        };
        return $cart;
    }

}
