<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Templatec99841dc4b extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'_flash' => 'blockFlash',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'_flash' => 'html',
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
?> Administrace IROPE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
              
        <link rel="apple-touch-icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */ ?>/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/manage/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */ ?>/manage/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */ ?>/manage/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/manage/css/Navbar---App-Toolbar--LG--MD---Mobile-Nav--SM--XS.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */ ?>/manage/css/Navbar---App-Toolbar--LG--MD---Mobile-Nav--SM--XS1.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */ ?>/manage/css/Sidebar-Menu1.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */ ?>/manage/css/styles.css">
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>

        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 28 */ ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <a class="navbar-brand navbar-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:Default")) ?>">Administrace webu IROPE </a>
                <div class="container-fluid">
                    <div class="navbar-header"><a class="btn btn-link navbar-btn" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-2">
                        <ul class="nav navbar-nav navbar-right" id="desktop-toolbar">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img class="img-circle" src="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 45 */ ?>/manage/img/user-photo.jpg" width="25px" height="25px"> <?php
		echo LR\Filters::escapeHtmlText($username) /* line 45 */ ?> <i class="fa fa-chevron-down fa-fw"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#"><i class="fa fa-user fa-fw"></i> Profil </a></li>
                                    <li role="presentation"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Auth:logout")) ?>"><i class="fa fa-power-off fa-fw"></i> Odhlásit se </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ol class="sidebar-nav">
                    <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:Default")) ?>"><i class="glyphicon glyphicon-folder-open"></i> Objednávky </a>
                        <ol>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:List", ['all'])) ?>"><i class="fa fa-list"></i> Všechny objednávky</a></li>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:List", ['active'])) ?>"><i class="fa fa-remove"></i> Aktuální objednávky</a></li>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:List", ['complete'])) ?>"><i class="fa fa-check"></i> Hotové objednávky</a></li>
                        </ol>
                    </li>
                    <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Default")) ?>"> <i class="glyphicon glyphicon-file"></i> Produkty</a>
                        <ol>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Create")) ?>"><i class="fa fa-plus"></i> Nový</a></li>
                        </ol>
                    </li>
                    <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:Default")) ?>"> <i class="fa fa-quote-left"></i> Články</a></li>
                    <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Default")) ?>"> <i class="fa fa-photo"></i> Galerie</a>
                        <ol>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:createalbum")) ?>"><i class="fa fa-plus"></i> Nový</a></li>
                        </ol>
                    </li>
                    <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:Default")) ?>"><i class="glyphicon glyphicon-cog"></i> Nastavení</a>
                        <ol>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:Users")) ?>"><i class="fa fa-users"></i> Uživatelé</a></li>
                            <li><a class="" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:Contact")) ?>"><i class="fa fa-envelope-square"></i> Kontaktní údaje</a></li>
                        </ol>
                    </li>
                    <li><a class="" href="#"><i class="glyphicon glyphicon-user"></i> Správa stránek</a>
                        <ol>
                            <li><a class="" href=""><i class="fa fa-edit"></i> Vzhled stránek</a></li>
                            <li><a class="" href=""><i class="fa fa-envelope-square"></i> Obsah stránek</a></li>
                        </ol>
                    </li>
                </ol>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid">             
                    <div class="row">
                        <div class="col-md-12">
<div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('flash')) ?>"><?php $this->renderBlock('_flash', $this->params) ?></div><?php
		$this->renderBlock('content', $this->params, 'html');
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->       
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
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 96');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		
	}


	function blockFlash($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("flash", "static");
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>                                <div  <?php if ($_tmp = array_filter(['alert', 'alert-dismissable', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong><?php echo LR\Filters::escapeHtmlText($flash->header) /* line 98 */ ?></strong> <?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 98 */ ?>.
                                </div>
<?php
			$iterations++;
		}
		$this->global->snippetDriver->leave();
		
	}


	function blockScripts($_args)
	{
		extract($_args);
		?>        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 109 */ ?>/js/jquery.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 110 */ ?>/js/nette.ajax.js"></script>
        <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 112 */ ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 113 */ ?>/manage/js/Sidebar-Menu.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script type="text/javascript" src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 117 */ ?>/dialog.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 118 */ ?>/manage/js/main.js"></script>
<?php
	}

}
