<?php


namespace App\FrontModule\Forms;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Nette\Object;
use App\Model\Facades\CartFacade;
use Kasika\Main\IBaseFormFactory;
use Nette\Forms\Form;

/**
 * Description of CartFormfactory
 *
 * @author Stanislav
 */
class CartFormFactory extends Object {
    
    /** @var CartFacade */
    private $cartFacade;
    
    /** @var IBaseFormFactory */
    private $baseFormFactory;
    
    /** @var mixed */
    private $id;
    
    function __construct(CartFacade $cartFacade, IBaseFormFactory $baseFormFactory) {
        $this->cartFacade = $cartFacade;
        $this->baseFormFactory = $baseFormFactory;
    }
    
    public function create($id) 
    {
        $this->id = $id;
        $form = $this->baseFormFactory->create();
        $form->addInteger('quantity', 'Množství')->setAttribute("class", "form-control");
        
        $form->addSubmit('submit', 'Přidat do košíku')->setAttribute("class", "form-control btn btn-primary");
        $form->onSuccess[] = $this->process;
        return $form;
    }
    
    public function process(Form $form) {
        $this->cartFacade->add($this->id, $form->values->quantity);
    }
    
}
