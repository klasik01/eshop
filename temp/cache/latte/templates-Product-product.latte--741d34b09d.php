<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Product/product.latte

use Latte\Runtime as LR;

class Template741d34b09d extends Latte\Runtime\Template
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
<div class="col-lg-6 col-md-6 col-md-push-6">
<?php
		$this->renderBlock('title', get_defined_vars());
?>
    <hr>

    <p><?php echo LR\Filters::escapeHtmlText($product->kratky_popis) /* line 8 */ ?></p>
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
                    <td><span class="label label-danger"><?php echo LR\Filters::escapeHtmlText($product->material) /* line 18 */ ?></span></td>
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
                    <td><span class="label label-primary"><?php echo LR\Filters::escapeHtmlText($product->typ_ulu) /* line 22 */ ?></span></td>
                </tr>
                <tr class="product-price main">
                    <td>Cena výrobku</td>
                    <td><?php echo LR\Filters::escapeHtmlText($product->cena) /* line 26 */ ?> Kč</td>
                </tr>
            </tbody>
        </table>
        <?php
		/* line 30 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["cartForm"], []);
?>

            <div class="col-xs-6"> 
                <input type="number" value="1" name="quantity" id="quantity" class="form-control" min="1" max="1000" required>
            </div> 
            <div class="col-xs-6">  
                <button type="submit" name="submit" class="btn btn-primary form-control">
                    <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Vložit do košíku
                </button>
            </div>  
        <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

    </div>




</div>
<div class="col-lg-6 col-md-6 col-md-pull-6">
    <div id="product-images"><img class="img-responsive" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 47 */ ?>/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($product->fotografie)) /* line 47 */ ?>"></div>
</div>
<div class="col-md-12">
    <div class="product-description">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Popis Produktu</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <p><?php echo LR\Filters::escapeHtmlText($product->dlouhy_popis) /* line 56 */ ?> </p>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div><?php
	}


	function blockTitle($_args)
	{
		extract($_args);
		?>    <h4><?php echo LR\Filters::escapeHtmlText($product->nazev) /* line 5 */ ?></h4>
<?php
	}

}
