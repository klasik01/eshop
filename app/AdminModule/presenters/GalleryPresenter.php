<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use Nette\Database\Context;
use App\AdminModule\Forms\AlbumFormFactory;
use App\AdminModule\Forms\ImageFormFactory;
use Nette\InvalidArgumentException;
use Nette\Application\UI\Form;

/**
 * Description of GalleryPresenter
 *
 * @author Stanislav
 */
class GalleryPresenter extends BasePresenter {

    /** @var AlbumFormFactory @inject */
    public $formFactory;

    /** @var ImageFormFactory @inject */
    public $imageFormFactory;

    /** @var int */
    private $id;

    /** @var Context @inject */
    public $database;

    public function actionDefault() {
        $this->template->albums = $this->database->table('galerie_slozka');
    }

    public function actionAlbum($id) {
        $cat = $this->database->table('galerie_slozka')->where("id", $id);
        if ($cat) {
            $this->template->albums = $this->database->table('galerie_slozka')->get($id);
            $this->template->images = $this->database->table("galerie")->where("kategorie", $id);
        } else {
            redirect("default");
        }
    }

    public function actionEditalbum($id) {
        $this->id = $id;
        $this->template->album = $this->database->table('galerie_slozka')->get($id);
    }

    public function actionEdit($id) {
        $this->id = $id;
        $this->template->image = $this->database->table('galerie')->get($id);
    }

    protected function createComponentForm() {
        try {
            $form = $this->formFactory->create($this->id);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Album uloženo", "Album bylo úspěšně uloženo", "success");
            $this->redirect("default");
        };
        return $form;
    }

    protected function createComponentFormimage() {
        try {
            $form = $this->imageFormFactory->create($this->id);
        } catch (InvalidArgumentException $ex) {
            $this->error($ex->getMessage());
        }
        $form->onSuccess[] = function() {
            $this->flashMessage("Obrázek uloženo", "Obrázek bylo úspěšně uloženo", "success");
            $this->redirect("default");
        };
        return $form;
    }

    public function handleRemovealbum($id) {
        try {
            $image = $this->database->table('galerie_slozka')->get($id);
            $this->database->table("galerie_slozka")->where("id", $id)->fetch()->delete();

            if (file_exists($image->url)) {
                unlink($image->url);
            }

            $this->flashMessage("Album smazáno", "Album bylo úspěšně odstraněno", "success");
            $this->redirect("default");
        } catch (Exception $ex) {
            $this->flashMessage("Došlo k chybě", "Nastala neočekávaná chyba", "danger");
            $this->redirect("default");
        }
    }

    public function handleActiveimage($id, $status) {
        if ($this->isAjax()) {

            $image = $this->database->table('galerie')->get($id);
            try {
                if ($image) {
                    $this->database->query("UPDATE galerie SET aktivni = ? WHERE id = ?", $status, $id);
                    $this->flashMessage("Změna provedena", "Obrázek " . $image->nazev . " byl změněn", "success");
                } else {
                    $this->flashMessage("Chyba", "Obrázek s id = " . $id . " nebyl nalezen", "danger");
                }
            } catch (\Nette\Neon\Exception $ex) {
                $this->flashMessage("Chyba", "Při operaci došlo k chybě", "danger");
            }
        } else {
            $this->flashMessage("Chyba", "Nastale neočekávaná chyba. Potřeba zkontrolovat jestli funguje AJAX", "danger");
            $this->redirect("default");
        }
    }

    public function handleRemoveimage($id) {
        try {
            $image = $this->database->table('galerie')->get($id);
            $this->database->table("galerie")->where("id", $id)->fetch()->delete();

            if (file_exists($image->url)) {
                unlink($image->url);
            }

            $this->flashMessage("Obrázek smazáno", "Obrázek bylo úspěšně odstraněno", "success");
            $this->redirect("default");
        } catch (Exception $ex) {
            $this->flashMessage("Došlo k chybě", "Nastala neočekávaná chyba", "danger");
            $this->redirect("default");
        }
    }

}
