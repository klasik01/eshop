<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Order/detail.latte

use Latte\Runtime as LR;

class Template3c9b650138 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 160');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="text-nowrap panel-title">Objednávka č. <?php echo LR\Filters::escapeHtmlText($order->id_objednavky) /* line 6 */ ?></h1></div>
    <div class="panel-body">
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0">
            <div class="well">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr><th colspan="2">Adresát </th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jméno </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->jmeno) /* line 18 */ ?>&nbsp;<?php
		echo LR\Filters::escapeHtmlText($order->adresat->prijmeni) /* line 18 */ ?></td>
                            </tr>
                            <tr>
                                <td>email </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->email) /* line 22 */ ?></td>
                            </tr>
                            <tr>
                                <td>tel: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->tel) /* line 26 */ ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="well">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Objednávka na firmu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Název firmy </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->nazev_firmy) /* line 43 */ ?></td>
                            </tr>
                            <tr>
                                <td>DIČ </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->dic) /* line 47 */ ?></td>
                            </tr>
                            <tr>
                                <td>IČ</td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->adresat->ic) /* line 51 */ ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-lg-offset-0 col-md-4">
            <div class="well">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Fakturační adresa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ulice: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_fakturacni')->ulice) /* line 70 */ ?></td>
                            </tr>
                            <tr>
                                <td>Město: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_fakturacni')->mesto) /* line 74 */ ?></td>
                            </tr>
                            <tr>
                                <td>PSČ: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_fakturacni')->psc) /* line 78 */ ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="well">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Dodací adresa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ulice: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_dodaci')->ulice) /* line 95 */ ?></td>
                            </tr>
                            <tr>
                                <td>Město: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_dodaci')->mesto) /* line 99 */ ?> </td>
                            </tr>
                            <tr>
                                <td>PSČ: </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->ref('adresa', 'id_dodaci')->psc) /* line 103 */ ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-lg-offset-0 col-md-4">
            <div class="well">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Doprava </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo LR\Filters::escapeHtmlText($order->doprava->nazev) /* line 121 */ ?></td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->doprava->cena) /* line 122 */ ?>&nbsp;Kč</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Platba </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo LR\Filters::escapeHtmlText($order->platba->nazev) /* line 136 */ ?> </td>
                                <td><?php echo LR\Filters::escapeHtmlText($order->platba->cena) /* line 137 */ ?>&nbsp;Kč</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="well">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Výrobek </th>
                                <th>Materiál </th>
                                <th>Typ úlu </th>
                                <th># </th>
                                <th>Cena 1 za kus</th>
                                <th>Sleva </th>
                                <th>Celkem cena</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
		$iterations = 0;
		foreach ($bascet as $item) {
			if ($bascet !== NULL) {
?>                            <tr>
                                <td><?php echo LR\Filters::escapeHtmlText($item->ref('produkty', 'id_vyrobku')->nazev) /* line 161 */ ?></td>
                                <td><?php echo LR\Filters::escapeHtmlText($item->ref('produkty', 'id_vyrobku')->material) /* line 162 */ ?></td>
                                <td><?php echo LR\Filters::escapeHtmlText($item->ref('produkty', 'id_vyrobku')->typ_ulu) /* line 163 */ ?></td>
                                <td><?php echo LR\Filters::escapeHtmlText($item->mnozstvi) /* line 164 */ ?>x</td>
                                <td><?php echo LR\Filters::escapeHtmlText($item->ref('produkty', 'id_vyrobku')->cena) /* line 165 */ ?> Kč</td>
                                <td><?php echo LR\Filters::escapeHtmlText($item->ref('produkty', 'id_vyrobku')->sleva) /* line 166 */ ?> Kč</td>
                                <td><strong><?php echo LR\Filters::escapeHtmlText($item->cena) /* line 167 */ ?> Kč</strong></td>                              
                            </tr>
<?php
			}
			$iterations++;
		}
?>
                            <tr>
                                <td colspan='6'><h4 class='pull-right'>Cena celkem:</h4></td>
                                <td colspan=""><h4 class="text-center" style='color:red;'><?php echo LR\Filters::escapeHtmlText($order->celkova_cena) /* line 171 */ ?> Kč</h4></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="well">
                <h4>Poznámka k objednávce</h4>
                <p> <?php echo LR\Filters::escapeHtmlText($order->poznamka) /* line 183 */ ?></p>
            </div>
        </div>
        <div class="col-xs-6">
            <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 187 */ ?>/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($order->faktura)) /* line 187 */ ?>" class="btn btn-danger btn-block" >Zobrazit Fakturu</a>
        </div>
        <div class="col-xs-6">
            <?php
		/* line 190 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["statusForm"], []);
?>

                <h4 class='info'>Produk je <?php
		if ($order->status == 0) {
			?> ve výrobě<?php
		}
		else {
			?> dokončen<?php
		}
?></h4>
                <input type="hidden" name="id" value="<?php echo LR\Filters::escapeHtmlAttr($order->id_objednavky) /* line 192 */ ?>">
                <?php echo end($this->global->formsStack)["status"]->getControl() /* line 193 */ ?>

                <div class="btn-group pull-right" role="group">
                    <?php echo end($this->global->formsStack)["save"]->getControl() /* line 195 */ ?>

                    <button type="button" onclick="window.history.back()" class='btn btn-info btn-lg'>Vrátit se zpět</button>
                </div>
            <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

        </div>
        <div class="clearfix"></div>
    </div>
</div><?php
	}

}
