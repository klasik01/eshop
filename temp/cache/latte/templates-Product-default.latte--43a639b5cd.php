<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Product/default.latte

use Latte\Runtime as LR;

class Template43a639b5cd extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 41');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Výrobky </h3></div>
            <div class="panel-body">
                <div>
                    <form method="get">
                        <div class="input-group">
                            <input class="form-control" type="text" name="q" required="" placeholder="Hledej..." autocomplete="on" id="system-search"><span class="input-group-btn"> <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"> </span></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="btn-group" role="group">
                    <a class="btn btn-warning" role="button" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Create")) ?>"> <span class="glyphicon glyphicon-plus"> Vytvořit nový produkt</span></a>
                </div>
                <div class="pull-right">
                    <div class="btn-group" role="group">
                        <button class="btn btn-success btn-filter" type="button" data-target="aktivni">Aktivní </button>
                        <button class="btn btn-danger btn-filter" type="button" data-target="neaktivni">Neaktivni </button>
                        <button class="btn btn-default btn-filter" type="button" data-target="all">Všechny produtky</button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="table-container">
                    <div class="table-responsive table-filter table-list-search table-condensed">
                        <form method="POST" action="javascript:void(0)" >
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Název produktu</th>
                                        <th>Kategorie </th>
                                        <th class="text-center">Cena </th>
                                        <th class="text-center">Sleva </th>
                                        <th class="text-right">Akce</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
		$iterations = 0;
		foreach ($product as $item) {
			?>                                    <tr data-status="<?php
			if ($item->aktivni === 0) {
				?>neaktivni<?php
			}
			else {
				?>aktivni<?php
			}
?>">
                                        <td><img class="img-responsive thumbnail" style="height: 50px;" src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 42 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->fotografie)) /* line 42 */ ?>" alt="<?php
			echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 42 */ ?>"></td>
                                        <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Detail", [$item->id])) ?>"><strong><?php
			echo LR\Filters::escapeHtmlText($item->nazev) /* line 43 */ ?></strong><br><label class="label-danger"><?php
			echo LR\Filters::escapeHtmlText($item->typ_ulu) /* line 43 */ ?></label>&nbsp;<label class="label-primary"><?php
			echo LR\Filters::escapeHtmlText($item->material) /* line 43 */ ?></label> </a></td>
                                        <td><?php echo LR\Filters::escapeHtmlText($item->kategorie->nazev) /* line 44 */ ?></td>
                                        <td class="text-center"><strong><?php echo LR\Filters::escapeHtmlText($item->cena) /* line 45 */ ?>&nbsp;Kč</strong></td>
                                        <td class="text-center"><strong><?php echo LR\Filters::escapeHtmlText($item->sleva) /* line 46 */ ?>&nbsp;Kč</strong></td>
                                        <td class="pull-right">
                                            <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Product:Update", [$item->id])) ?>"> <span class="glyphicon glyphicon-edit"> </span></a>
                                            <a
                                                data-confirm="Opravdu chcete produkt ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 50 */ ?> ' smazat?"
                                                data-confirm-title="Confirm"
                                                data-confirm-text="Opravdu chcete produkt ' <?php echo LR\Filters::escapeHtmlAttr($item->nazev) /* line 52 */ ?> ' smazat?"
                                                data-confirm-ok-class="btn-danger"
                                                data-confirm-ok-text="Delete"
                                                data-confirm-cancel-class="btn-success"
                                                data-confirm-cancel-text="Cancel"
                                                class="btn btn-danger btn-mini"
                                                data-ajax="on" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete!", [$item->id])) ?>"><span class="glyphicon glyphicon-remove" data-confirm="Opravdu chcete vybraný produkt odstranit?"> </span></a>
                                            <input type="checkbox" <?php
			if ($item->aktivni === 1) {
				?> checked<?php
			}
			?> data-toggle="toggle" class="activation-product ajax" rel="<?php echo LR\Filters::escapeHtmlAttr($item->id) /* line 60 */ ?>" data-href="<?php
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("active!", [$item->id])) ?>">
                                        </td>
                                    </tr>
<?php
			$iterations++;
		}
?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
	}

}
