<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuControl
 *
 * @author Stanislav
 */
namespace App\FrontModule\Control;

use Nette\Application\UI\Control;

class MenuControl extends Control{
   
    private $database;
    
    public function __construct(\Nette\Database\Context $database) {
        $this->database = $database;
    }
    
    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/Menucontrol.latte');
        $template->menuItems = $this->database->table('kategorie');
        $template->render();
    }
}
