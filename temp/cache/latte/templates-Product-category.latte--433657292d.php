<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Product/category.latte

use Latte\Runtime as LR;

class Template433657292d extends Latte\Runtime\Template
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
		if (isset($this->params['product'])) trigger_error('Variable $product overwritten in foreach on line 23');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-brown">
    <div class="panel-heading">
        <div class="panel-title">

        </div>
    </div>
    <div class="panel-body">
<?php
		$this->renderBlock('title', get_defined_vars());
		if ($category->id != 13) {
?>
            <div class=" btn-group">
                <button class="btn btn-mystyle btn_filter btn-success" data-target="vsechny" type="button">Všechny výrobky</button>
                <button class="btn btn-mystyle   btn_filter btn-warning" data-type="42x17"  type="button">Velikost úlu 42 x 17</button>
                <button class="btn btn-mystyle  btn_filter btn-info" data-type="39x24" type="button">Velikost úlu 39 x 24</button>
            </div> 
            <div class=" btn-group pull-right">
                <button class="btn btn-mystyle btn_filter btn-primary" data-target="DTD" type="button">DTD </button>
                <button class="btn  btn-mystyle  btn_filter btn-danger" data-target="masiv" type="button">Masiv </button>
            </div>
<?php
		}
?>
        <div class="clearfix"></div>

<?php
		$iterations = 0;
		foreach ($products as $product) {
			?>        <div class="col-lg-3 col-md-3 col-sm-4 polozka" style='margin-top: 10px;' data-status='<?php
			echo LR\Filters::escapeHtmlAttr($product->material) /* line 23 */ ?>' data-typ='<?php echo LR\Filters::escapeHtmlAttr($product->typ_ulu) /* line 23 */ ?>'>
            <div class="nadpis-produkt" style='height: 50px;'>
                <a  href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Product", [$product->id])) ?>"><h5><?php
			echo LR\Filters::escapeHtmlText($product->nazev) /* line 25 */ ?></h5></a>
            </div>
            <div>
                <label class="label <?php
			if ($product->typ_ulu == '42x17') {
				?>label-success<?php
			}
			else {
				?>label-primary<?php
			}
?>">
                    Pro úl <?php echo LR\Filters::escapeHtmlText($product->typ_ulu) /* line 29 */ ?>

                </label>
            </div>
            <a class="text-center" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Product", [$product->id])) ?>"><img src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($product->fotografie)) /* line 32 */ ?>" width="100%"  class="img-responsive product-image"></a>
            <div>
                <div>
                    <h5 class="text-center"><?php echo LR\Filters::escapeHtmlText($product->cena) /* line 35 */ ?> Kč</h5></div>
            </div>
        </div>
<?php
			$iterations++;
		}
?>

    </div>

</div>
<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
		?>        <h1 class="header-styl"><?php echo LR\Filters::escapeHtmlText($category->nazev) /* line 9 */ ?></h1>
<?php
	}

}
