<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Forms;

use Nette\Object;
use App\Model\Facades\CartFacade;
use Kasika\Main\IBaseFormFactory;
use Nette\Forms\Form;
use Nette\Database\Context;

/**
 * Description of SummaryFormFactory
 *
 * @author Stanislav
 */
class SummaryFormFactory extends Object{
    
    /** @var Context @inject */
    private $database;
    
    /** @var IBaseFormFactory */
    private $baseFormFactory;
    
    /** @var CartFacade */
    private $cartFacade;

    
    function __construct(CartFacade $cartFacade, IBaseFormFactory $baseFormFactory) {
        $this->cartFacade = $cartFacade;
        $this->baseFormFactory = $baseFormFactory;
    }
    
    public function create() {

        $form = $this->baseFormFactory->create();
        $form->addSubmit("submit", "Dokončit objednávku")->setAttribute("class", "btn btn-primary btn-lg");
        $form->onSuccess[] = $this->process;
        return $form;
    }
    
    public function process()
    {
        $this->cartFacade->createOrder();
    }
}
