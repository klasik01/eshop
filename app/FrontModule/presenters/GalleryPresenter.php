<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\FrontModule\Presenters;

use Nette\Database\Context;

/**
 * Description of GalleryPresenter
 *
 * @author Stanislav
 */
class GalleryPresenter extends BasePresenter {

    /** @var Context @inject */
    public $database;

    public function actionDefault() {
        $this->template->categories = $this->database->table("galerie_slozka")->where("aktivni = 1");
    }

    public function actionAlbum($id) {
        $cat = $this->database->table("galerie_slozka")->get($id);
        if ($cat && $cat->aktivni === 1) {
            $album = $this->database->table("galerie")->where("kategorie", $id)->where("aktivni = 1");

            $this->template->album = $album;
            $this->template->category = $cat;
        } else {
            $this->flashMessage("Nenalezeno", "Album nebylo nalezeno", "danger");
            $this->redirect("default");
        }
    }

}
