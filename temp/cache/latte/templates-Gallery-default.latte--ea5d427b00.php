<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Gallery/default.latte

use Latte\Runtime as LR;

class Templateea5d427b00 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 8');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="photo-gallery">
    <div class="">
        <div class="intro">
            <h2 class="text-center">Alba v Galerii</h2>
        </div>
        <div class="row photos">
<?php
		$iterations = 0;
		foreach ($categories as $item) {
?>            <div class="col-lg-3 col-md-4 col-sm-6 item">
                <a  href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Album", [$item->id])) ?>"><img class="img-responsive" src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 9 */ ?>"></a>
                <h4 class="text-center"><?php echo LR\Filters::escapeHtmlText($item->nazev) /* line 10 */ ?></h4>
            </div>                
<?php
			$iterations++;
		}
?>
        </div>
    </div>
</div><?php
	}

}
