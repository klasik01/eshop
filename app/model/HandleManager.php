<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

use Nette\Database\Context;
use Nette\Object;

/**
 * Description of HandleManager
 *
 * @author Stanislav
 */
class HandleManager extends Object {

    /**  @var Context @inject */
    private $database;

    function __construct(Context $database) {
        $this->database = $database;
    }

    public function delete($id, $table, $file = FALSE) {
        
    }

}
