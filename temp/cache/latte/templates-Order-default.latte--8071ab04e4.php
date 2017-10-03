<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Order/default.latte

use Latte\Runtime as LR;

class Template8071ab04e4 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 38');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Objednávky </h3></div>
    <div class="panel-body">
        <div>
            <form method="get">
                <div class="input-group">
                    <input class="form-control" type="text" name="q" required="" placeholder="Hledej..." autocomplete="on" id="system-search"><span class="input-group-btn"> <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"> </span></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="pull-right">
            <div class="btn-group" role="group">
                <button class="btn btn-success btn-filter" type="button" data-target="dokonceno">Dokončeno </button>
                <button class="btn btn-info btn-filter" type="button" data-target="vyrabeno">Ve výrobě</button>
                <button class="btn btn-default btn-filter" type="button" data-target="all">Všechno </button>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="table-container">
            <div class="table-responsive table-filter table-list-search">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Status </th>
                            <th>ID objedávky</th>
                            <th>Datum</th>
                            <th>Adresát </th>
                            <th class="text-center">Cena </th>
                            <th>Faktura</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
		$iterations = 0;
		foreach ($orders as $item) {
			?>                        <tr data-status="<?php
			if ($item->status == 0) {
				?>vyrabeno<?php
			}
			else {
				?>dokonceno<?php
			}
?>">
                            <td class=' <?php
			if ($item->status == 0) {
				?> danger'><span class='glyphicon glyphicon-remove'></span> <?php
			}
			else {
				?> success'><span class='glyphicon glyphicon-check'></span><?php
			}
?></td>
                            <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:Detail", [$item->id_objednavky])) ?>"><?php
			echo LR\Filters::escapeHtmlText($item->id_objednavky) /* line 40 */ ?></a></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->datum_nakupu) /* line 41 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->adresat->jmeno) /* line 42 */ ?>&nbsp;<?php
			echo LR\Filters::escapeHtmlText($item->adresat->prijmeni) /* line 42 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->celkova_cena) /* line 43 */ ?>&nbsp;Kč</td>
                            <td><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 44 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->faktura)) /* line 44 */ ?>"><?php echo LR\Filters::escapeHtmlText($item->faktura) /* line 44 */ ?></a></td>
                        </tr>
<?php
			$iterations++;
		}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
	}

}
