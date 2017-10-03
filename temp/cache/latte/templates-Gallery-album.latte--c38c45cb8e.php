<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Gallery/album.latte

use Latte\Runtime as LR;

class Templatec38c45cb8e extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 14');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<div class="photo-gallery">
    <div class="">
        <div class="intro">
            <h2 class="text-center"><?php echo LR\Filters::escapeHtmlText($albums->nazev) /* line 8 */ ?></h2>
        </div>
        <div class="row photos">
            <div class="col-lg-3 col-md-4 col-sm-6 item">
                <a  href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:create")) ?>"><img class="img-responsive" width="150" src="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/img/newimage.png"></a>
            </div>              
<?php
		$iterations = 0;
		foreach ($images as $item) {
?>            <div class="col-lg-3 col-md-4 col-sm-6 item">
                <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 15 */ ?>" data-lightbox="photos"><img class="img-responsive" src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->url)) /* line 15 */ ?>"></a>
                <h5 class='text-center'>
                    <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Gallery:edit", [$item->id])) ?>"><span class='fa fa-pencil'> Editovat</span></a>
                    <a
                        data-confirm="Opravdu chcete obrázek ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 19 */ ?> ' smazat?"
                        data-confirm-title="Confirm"
                        data-confirm-text="Opravdu chcete obrázek ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 21 */ ?> ' smazat?"
                        data-confirm-ok-class="btn-danger"
                        data-confirm-ok-text="Delete"
                        data-confirm-cancel-class="btn-success"
                        data-confirm-cancel-text="Cancel"                      
                        data-ajax="on" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("removeimage!", [$item->id])) ?>"><span class="fa fa-trash-o" data-confirm="Opravdu chcete vybrané album odstranit?"> Smazat Album</span></a>
               <br> <br>
                    <input type="checkbox" <?php
			if ($item->aktivni === 1) {
				?> checked<?php
			}
			?> data-toggle="toggle" class="activation-product ajax" rel="<?php echo LR\Filters::escapeHtmlAttr($item->id) /* line 29 */ ?>" data-href="<?php
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("activeimage!", [$item->id])) ?>">
                </h5>
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
