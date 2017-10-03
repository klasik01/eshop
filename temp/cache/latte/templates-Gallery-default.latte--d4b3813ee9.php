<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Gallery/default.latte

use Latte\Runtime as LR;

class Templated4b3813ee9 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 11');
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
		foreach ($albums as $item) {
?>            <div class="col-lg-3 col-md-4 col-sm-6 item">
                <a  href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Album", [$item->id])) ?>"><img class="img-responsive" src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 12 */ ?>"></a>
                <h4 class="text-center"><?php echo LR\Filters::escapeHtmlText($item->nazev) /* line 13 */ ?> / <?php
			if ($item->aktivni === 1) {
				?> Aktivní<?php
			}
			else {
				?> Neaktivní<?php
			}
?></h4>
                <h5 class='text-center'>
                    <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:Editalbum", [$item->id])) ?>"><span class='fa fa-pencil'> Editovat</span></a>
                    <a
                        data-confirm="Opravdu chcete album ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 17 */ ?> ' smazat?"
                        data-confirm-title="Confirm"
                        data-confirm-text="Opravdu chcete album ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 19 */ ?> ' smazat?"
                        data-confirm-ok-class="btn-danger"
                        data-confirm-ok-text="Delete"
                        data-confirm-cancel-class="btn-success"
                        data-confirm-cancel-text="Cancel"                      
                        data-ajax="on" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("removealbum!", [$item->id])) ?>"><span class="fa fa-trash-o" data-confirm="Opravdu chcete vybrané album odstranit?"> Smazat Album</span></a>
                </h5>
            </div>                
<?php
			$iterations++;
		}
?>
        </div>
    </div>
</div>
<?php
	}

}
