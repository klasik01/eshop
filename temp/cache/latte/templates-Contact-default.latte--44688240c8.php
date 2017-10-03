<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Contact/default.latte

use Latte\Runtime as LR;

class Template44688240c8 extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<table class="table table-condensed table-responsive">
    <tr>
    <th>Jméno a Příjemní:</th>
    <td><?php echo LR\Filters::escapeHtmlText($data->jmeno) /* line 8 */ ?> <?php echo LR\Filters::escapeHtmlText($data->prijmeni) /* line 8 */ ?></td>
    </tr>
    <tr>
    <th>IČO</th>
    <td><?php echo LR\Filters::escapeHtmlText($data->ic) /* line 12 */ ?></td>
    </tr>
    <tr>
    <th>Email:</th>
    <td><?php echo LR\Filters::escapeHtmlText($data->email) /* line 16 */ ?></td>
    </tr>
    <tr>
    <th>Tel:</th>
    <td><?php echo LR\Filters::escapeHtmlText($data->tel) /* line 20 */ ?></td>
    </tr>
    <tr>
    <th>Adresa</th>
    <td><?php echo LR\Filters::escapeHtmlText($data->ulice) /* line 24 */ ?>, <?php echo LR\Filters::escapeHtmlText($data->mesto) /* line 24 */ ?> <?php
		echo LR\Filters::escapeHtmlText($data->psc) /* line 24 */ ?></td>
    </tr>
</table>


<?php
		/* line 29 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["contactForm"], []);
?>

<div class="col-md-6"><?php
		if ($_label = end($this->global->formsStack)["name"]->getLabel()) echo $_label;
		echo end($this->global->formsStack)["name"]->getControl() /* line 30 */ ?></div>
<div class="col-md-6"><?php
		if ($_label = end($this->global->formsStack)["surname"]->getLabel()) echo $_label;
		echo end($this->global->formsStack)["surname"]->getControl() /* line 31 */ ?></div>
<div class="col-md-12"><?php
		if ($_label = end($this->global->formsStack)["subject"]->getLabel()) echo $_label;
		echo end($this->global->formsStack)["subject"]->getControl() /* line 32 */ ?></div>
<div class="col-md-12"><?php
		if ($_label = end($this->global->formsStack)["email"]->getLabel()) echo $_label;
		echo end($this->global->formsStack)["email"]->getControl() /* line 33 */ ?></div>
<div class="col-md-12"><?php
		if ($_label = end($this->global->formsStack)["content"]->getLabel()) echo $_label;
		echo end($this->global->formsStack)["content"]->getControl() /* line 34 */ ?></div>
<div class='clearfix'></div>
<div class="col-md-4 col-md-offset-8"><?php echo end($this->global->formsStack)["send"]->getControl() /* line 36 */ ?></div>

<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
	}

}
