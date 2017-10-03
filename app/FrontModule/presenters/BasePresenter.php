<?php

namespace App\FrontModule\Presenters;

use Nette;
use App\FrontModule\Control\FooterControl;
use App\FrontModule\Control\MenuControl;
use Kasika\ShopCart\Cart;
use Nette\Database\Context;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    /** @var Context $inject */
    public $database;

    /** @var Cart @inject */
    public $cart;
    
    public function __construct(Context $database) {
        parent::__construct();
        $this->database = $database;
    }
    
    protected function createComponentFooter() {
        $footer = new FooterControl($this->database);
        return $footer;
    }

    protected function createComponentMenu() {
        $menu = new MenuControl($this->database);
        return $menu;
    }

    protected function createTemplate() {
        $template = parent::createTemplate();
        $template->cart = $this->cart;
        return $template;
    }

}
