<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

/**
 * Description of AboutPresenter
 *
 * @author Stanislav
 */
class AboutPresenter extends BasePresenter{
    private $db;
    
    public function __construct(\Nette\Database\Context $database) {
        parent::__construct($database);
        $this->db = $database;
    }
    
    public function renderDefault() {
        $this->template->context = $this->db->table("article")->get(30);
    }
}
