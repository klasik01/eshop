<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Product/detail.latte

use Latte\Runtime as LR;

class Templateea81f3d0cb extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
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
<button class="btn btn-success btn-lg form-control" type="button" onclick="window.history.back();">Vrátit se zpět</button>

<div class="col-md-6 col-md-offset-3">
<div class="col-lg-6 col-md-6 col-md-push-6">
<?php
		$this->renderBlock('title', get_defined_vars());
?>
    <hr>

    <p><?php echo LR\Filters::escapeHtmlText($product->kratky_popis) /* line 11 */ ?></p>
    <div
        class="table-responsive">
        <table class="table">
            <thead>
                <tr></tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php
		if ($product->id === 13) {
			?> Druh medu <?php
		}
		else {
			?> Materiál<?php
		}
?></td>
                    <td><span class="label label-danger"><?php echo LR\Filters::escapeHtmlText($product->material) /* line 21 */ ?></span></td>
                </tr>
                <tr>
                    <td><?php
		if ($product->id === 13) {
			?> Množství <?php
		}
		else {
			?>Pro typ úlu <?php
		}
?></td>
                    <td><span class="label label-primary"><?php echo LR\Filters::escapeHtmlText($product->typ_ulu) /* line 25 */ ?></span></td>
                </tr>
                <tr class="product-price main">
                    <td>Cena výrobku</td>
                    <td><?php echo LR\Filters::escapeHtmlText($product->cena) /* line 29 */ ?> Kč</td>
                </tr>
            </tbody>
        </table>
        
    </div>




</div>
<div class="col-lg-6 col-md-6 col-md-pull-6">
    <div id="product-images"><img class="img-responsive" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 41 */ ?>/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($product->fotografie)) /* line 41 */ ?>"></div>
</div>
<div class="col-md-12">
    <div class="product-description">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Popis Produktu</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <p><?php echo LR\Filters::escapeHtmlText($product->dlouhy_popis) /* line 50 */ ?> </p>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div><?php
	}


	function blockTitle($_args)
	{
		extract($_args);
		?>    <h4><?php echo LR\Filters::escapeHtmlText($product->nazev) /* line 8 */ ?></h4>
<?php
	}

}
