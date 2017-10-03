<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template3cab1230d0 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
		}
?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */ ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */ ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/css/aguilaraldo1_section_contact.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */ ?>/css/dva-sloupce.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */ ?>/css/nav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */ ?>/css/Lightbox-Gallery.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */ ?>/css/styles.css">
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */ ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-default navbar-fixed-top navigation-clean-button">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav nav-right">
                        <li class="<?php
		if ($this->global->uiPresenter->isLinkCurrent(":Front:Homepage:Default")) {
			?>active<?php
		}
		?>" role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Front:Homepage:Default")) ?>">úvod </a></li>
                        <li class='<?php
		if ($this->global->uiPresenter->isLinkCurrent("Product:Default")) {
			?>active<?php
		}
		?>' role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Default")) ?>">e-shop </a></li>
                        <li class='<?php
		if ($this->global->uiPresenter->isLinkCurrent("About:Default")) {
			?>active<?php
		}
		?>' role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("About:Default")) ?>">o nás</a></li>
                        <li class='<?php
		if ($this->global->uiPresenter->isLinkCurrent("Gallery:Default")) {
			?>active<?php
		}
		?>' role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Default")) ?>">galerie </a></li>
                            <li class='<?php
		if ($this->global->uiPresenter->isLinkCurrent(":Front:Homepage:Conditions")) {
			?>active<?php
		}
		?>' role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Front:Homepage:Conditions")) ?>">obchodní podmínky</a></li>
                        <li class='<?php
		if ($this->global->uiPresenter->isLinkCurrent("Contact:Default")) {
			?>active<?php
		}
		?>' role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Contact:Default")) ?>">Kontakt</a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"> <a class="btn btn-default action-button" role="button" href="<?php
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Cart:default")) ?>">Nákupní košík - <?php
		echo LR\Filters::escapeHtmlText($cart->total) /* line 45 */ ?> Kč</a></p>
                </div>
            </div>
        </nav>
        <div class="container page">
            <div class="row">
                <div class="col-md-12 header"><img class="img-responsive" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 51 */ ?>/img/banner-pechy.png"></div>
                <div class="col-lg-9 col-lg-offset-0 col-lg-push-3 col-md-9 col-md-push-3 main-page">
                    <div id="main-content">
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>                        <div  <?php if ($_tmp = array_filter(['alert', 'alert-dismissable', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong><?php echo LR\Filters::escapeHtmlText($flash->header) /* line 56 */ ?></strong> <?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 56 */ ?>.
                        </div>
<?php
			$iterations++;
		}
		$this->renderBlock('content', $this->params, 'html');
?>
                    </div>
                </div>
<?php
		/* line 61 */ $_tmp = $this->global->uiControl->getComponent("menu");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
                <div class="col-md-12 footer-dark">
<?php
		/* line 63 */ $_tmp = $this->global->uiControl->getComponent("footer");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
                </div>
            </div>
        </div> 
<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
    </body>
</html>

<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 54');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 70 */ ?>/js/main.js"></script>	
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 71 */ ?>/js/vendor/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 73 */ ?>/js/main.js"></script>
<?php
	}

}
