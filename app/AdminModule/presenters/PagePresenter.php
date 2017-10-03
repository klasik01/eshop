<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use Nette\Database\Context;
use App\AdminModule\Forms\PageFormFactory;
use Nette\InvalidArgumentException;
use Nette\Application\UI\Form;

/**
 * Description of PagePresenter
 *
 * @author Stanislav
 */
class PagePresenter extends BasePresenter {

    /** @var PageFormFactory @inject */
    public $formFactory;

    /** @var Context @inject */
    public $database;
    
    private $id;

    public function actionDefault() {
        $this->template->pages = $this->database->table("article");
    }

    public function actionUpdate($id) {
        $this->id = $id;
    }
    
    public function actionDetail($id){
        $article = $this->database->table('article')->get($id);
        if($article){
            $this->template->article = $article;
        }else {
            $this->flashMessage("Stránka nenalezena", "Stránka " . $id ." nebyla nalezena", "danger");
            $this->redirect("default");
        }
        
    }

    protected function createComponentForm() {
        try {
            $form = $this->formFactory->create($this->id);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Stránka uložena", "Stránka byla úspěšně uložena", "success");
            $this->redirect("default");
        };
        return $form;
    }

    public function handleDelete($id) {
        $page = $this->database->table('article')->get($id);
        if ($page) {
            try {
                $this->database->table('article')->where('article_id', 'id')->fetch()->delete();
                $this->flashMessage("OK", "Stránka byla smazána", "success");
                $this->redirect("default");
            } catch (Exception $ex) {
                $this->flashMessage("Chyba", "Stránka nebyla smazána", "danger");
                $this->redirect("default");
            }
        }
    }

    //put your code here
}
