<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Order/list.latte

use Latte\Runtime as LR;

class Template54ef5c93fe extends Latte\Runtime\Template
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
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 29');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Aktuální objednávky </h3></div>
    <div class="panel-body">
        <div>
            <form method="get">
                <div class="input-group">
                    <input class="form-control" type="text" name="q" required="" placeholder="Hledej..." autocomplete="on" id="system-search"><span class="input-group-btn"> <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"> </span></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="table-container">
            <div class="table-responsive table-filter table-list-search">
                <table class="table table-hover">
                    <thead>
                        <tr>
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
?>                        <tr>
                            <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:Detail", [$item->id_objednavky])) ?>"><?php
			echo LR\Filters::escapeHtmlText($item->id_objednavky) /* line 30 */ ?></a></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->datum_nakupu) /* line 31 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->adresat->jmeno) /* line 32 */ ?>&nbsp;<?php
			echo LR\Filters::escapeHtmlText($item->adresat->prijmeni) /* line 32 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->celkova_cena) /* line 33 */ ?>&nbsp;Kč</td>
                            <td><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 34 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->faktura)) /* line 34 */ ?>"><?php echo LR\Filters::escapeHtmlText($item->faktura) /* line 34 */ ?></a></td>
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
