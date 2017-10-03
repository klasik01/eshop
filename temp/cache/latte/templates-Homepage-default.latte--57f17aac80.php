<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template57f17aac80 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<div class="col-md-12">
    <div class="page-header">
        <h1>Administrace webu IROPE <small>| celkový souhrn</small></h1></div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail orders">
                <div class="caption">
                    <h1 class="text-nowrap"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:Default")) ?>">Objednávky</a> </h1>
                    <h3 class="text-center"><i class="glyphicon glyphicon-ok"></i> <?php echo LR\Filters::escapeHtmlText($order_count) /* line 11 */ ?> aktuálních objednávek</h3>
                    <h5></h5></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail products">
                <div class="caption">
                    <h1 class="text-nowrap"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Default")) ?>">Produkty </a></h1>
                    <h3 class="text-center"><i class="glyphicon glyphicon-plus"></i><?php echo LR\Filters::escapeHtmlText($product_count) /* line 19 */ ?> aktivních produtků</h3>
                    <h5></h5></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail articles">
                <div class="caption">
                    <h1 class="text-nowrap"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:Default")) ?>">Články </a></h1>
                    <h3 class="text-center"><i class="glyphicon glyphicon-plus"></i><?php echo LR\Filters::escapeHtmlText($article_count) /* line 27 */ ?> článků</h3>
                    <h5></h5></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail articles">
                <div class="caption">
                    <h1 class="text-nowrap"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Default")) ?>"> Alba</a> </h1>
                    <h3 class="text-center"><i class="glyphicon glyphicon-plus"></i><?php echo LR\Filters::escapeHtmlText($albums_count) /* line 35 */ ?> článků</h3>
                    <h5></h5></div>
            </div>
        </div>
    </div>


<?php
	}

}
