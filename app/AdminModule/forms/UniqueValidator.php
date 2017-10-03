<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Forms;

use Nette\Object;
use Nette\Forms\Controls\BaseControl;
use Nette\Database\Table\Selection;

/**
 * Description of UniqueValidator
 *
 * @author Stanislav
 */
class UniqueValidator extends Object{
    //put your code here
    /** @var Selection */
    private $selection;
    
    private $id;
    
    function __construct(Selection $selection, $id = NULL) {
        $this->selection = $selection;
        $this->id = $id;
    }
    
    public function validate(BaseControl $control) {
        $condition[$control->name] = $control->value;
        if($this->id) {
            $condition['id!='] = $this->id;
        }
        return $this->selection->where($condition)->count() ? FALSE : TRUE;
    }
}
