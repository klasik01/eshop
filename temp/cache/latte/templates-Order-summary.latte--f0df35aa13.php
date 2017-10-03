<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Order/summary.latte

use Latte\Runtime as LR;

class Templatef0df35aa13 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 92');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<div class="col-md-12">
    <h2>Souhrn objednávky</h2>
    <div class="col-md-6">
        <h5>Kontaktní údaje</h5>
        <table class="table table-responsive">
            <tr>
                <th>Jméno a Příjmení</th>
                <td><?php echo LR\Filters::escapeHtmlText($order->name) /* line 12 */ ?> <?php echo LR\Filters::escapeHtmlText($order->surname) /* line 12 */ ?></td>
            </tr>
            <tr>
                <th><abbr>Tel:</abbr></th>
                <td><?php echo LR\Filters::escapeHtmlText($order->tel) /* line 16 */ ?></td>
            </tr>
            <tr>
                <th><abbr>Email:</abbr></th>
                <td><?php echo LR\Filters::escapeHtmlText($order->email) /* line 20 */ ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <h5>Fakturační adresa</h5>
        <table class="table table-responsive">
            <tr>
                <th>Ulice, čp:</th>
                <td><?php echo LR\Filters::escapeHtmlText($order->street) /* line 29 */ ?></td>
            </tr>
            <tr>
                <th>Město:</th>
                <td><?php echo LR\Filters::escapeHtmlText($order->city) /* line 33 */ ?></td>
            </tr>
            <tr>
                <th>PSČ:</th>
                <td><?php echo LR\Filters::escapeHtmlText($order->zip) /* line 37 */ ?></td>
            </tr>
        </table>
    </div>
<?php
		if ($order->onFirm == 1) {
?>
        <div class="col-md-6">
            <h5>Objednávka na firmu</h5>
            <table class="table table-responsive">
                <tr>
                    <th>Název firmy</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->f_name) /* line 47 */ ?></td>
                </tr>
                <tr>
                    <th>IČ:</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->ic) /* line 51 */ ?></td>
                </tr>
                <tr>
                    <th>DIČ:</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->dic) /* line 55 */ ?></td>
                </tr>
            </table>
        </div>
<?php
		}
		if ($order->dodaci == 1) {
?>
        <div class="col-md-6">
            <h5>Dodací adresa</h5>
            <table class="table table-responsive">
                <tr>
                    <th>Ulice, čp:</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->o_street) /* line 66 */ ?></td>
                </tr>
                <tr>
                    <th>Město:</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->o_city) /* line 70 */ ?></td>
                </tr>
                <tr>
                    <th>PSČ:</th>
                    <td><?php echo LR\Filters::escapeHtmlText($order->o_zip) /* line 74 */ ?></td>
                </tr>
            </table>
        </div>
<?php
		}
?>


    <div class="col-md-12">
        <h4>Nákupní košík</h4>
        <table class="table table-responsive">
            <thead>
            <th colspan="2">Název produktu</th>
            <th>KS</th>
            <th>Cena za kus</th>
            <th>Sleva za kus</th>
            <th>Celková cena</th>
            </thead>
            <tbody>
<?php
		$iterations = 0;
		foreach ($carts->getItems() as $item) {
?>                <tr>
                    <td><img class="img-responsive" scr="<?php echo LR\Filters::escapeHtmlAttr($basePath) /* line 93 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr($item->image) /* line 93 */ ?>"<<?php ?>/td>
                    <td><?php echo LR\Filters::escapeHtmlText($item->name) /* line 94 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($item->quantity) /* line 95 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($item->price) /* line 96 */ ?> Kč</td>
                    <td><?php echo LR\Filters::escapeHtmlText($item->discount) /* line 97 */ ?> Kč</td>
                    <th><?php echo LR\Filters::escapeHtmlText(($item->price - $item->discount)* $item->quantity) /* line 98 */ ?> Kč</th>

                </tr>
<?php
			$iterations++;
		}
?>
            </tbody>
        </table>
        <div class="col-md-6 col-md-offset-6">
            <table class="table table-responsive">
                <tr>
                    <th>Cena produktů (s DPH)</th>
                    <td><?php echo LR\Filters::escapeHtmlText($carts->total) /* line 107 */ ?> Kč</td>
                </tr><tr>
                    <th>Cena dopravy</th>
                    <td><?php echo LR\Filters::escapeHtmlText($travel->cena) /* line 110 */ ?> Kč</td>
                </tr><tr>
                    <th>Cena platby</th>
                    <td><?php echo LR\Filters::escapeHtmlText($payment->cena) /* line 113 */ ?> Kč</td>
                </tr><tr style="font-size: 20px;">

                    <th>Celková cena (s DPH)</th>
                    <td style="font-weight: bold; color: red;"><?php echo LR\Filters::escapeHtmlText($carts->total + $travel->cena + $payment->cena) /* line 117 */ ?> Kč</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
		/* line 123 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["summaryOrder"], []);
?>

    <button type="button" class="btn btn-danger btn-lg pull-left" onclick="window.history.back();">Zpět k údajům</button>
    <input type="submit" name="submit" class="btn btn-primary btn-lg pull-right" value="Dokončit objednávku">
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		
	}

}
