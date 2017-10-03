<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Control;
use Nette\Application\UI\Control;
use Nette\Database\Context;

/**
 * Description of FooterControl
 *
 * @author Stanislav
 */
class FooterControl extends Control{
    
    private $database;
    
    public function __construct(Context $database) {
        parent::__construct();
        $this->database = $database;
    }
    
    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/footer.latte');
        $template->footer = $this->database->table("mojeudaje")->get(1);
        $template->render();
    }
}
