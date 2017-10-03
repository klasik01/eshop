<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/Order/default.latte

use Latte\Runtime as LR;

class Template7a0320fc4b extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php
		$this->renderBlock('title', get_defined_vars());
?>

<?php
		/* line 7 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["orderForm"], []);
?>

    <div class="col-xs-12">
        <div class="col-md-5 well" >
            <h5><span class="glyphicon glyphicon-road"></span> Způsob dopravy</h5>
            <?php echo end($this->global->formsStack)["travel"]->getControl() /* line 11 */ ?>

        </div>
        <div class="col-md-6 col-md-offset-1 well">
            <h5><span class="glyphicon glyphicon-barcode"></span> Způsob platby</h5>
            <?php echo end($this->global->formsStack)["payment"]->getControl() /* line 15 */ ?>

        </div>
    </div>

    <div class="col-xs-12 well">
        <div class="col-md-6">
            <h5>Kontaktní údaje</h5>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["name"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["name"]->getControl()->addAttributes(['require']) /* line 23 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["surname"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["surname"]->getControl() /* line 25 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["email"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["email"]->getControl() /* line 27 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["tel"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["tel"]->getControl() /* line 29 */ ?></div>
        </div>
        <div class="col-md-6">
            <h5>Fakturační údaje</h5>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["street"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["street"]->getControl() /* line 34 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["city"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["city"]->getControl() /* line 36 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["zip"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["zip"]->getControl() /* line 38 */ ?></div>
        </div>
    </div>
    <hr>

    <div class="col-md-12 well">
        <div>
        <h5><?php echo end($this->global->formsStack)["onFirm"]->getControl() /* line 45 */ ?></h5>
        </div><div  id="on_firm">
        <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["f_name"]->getLabel()) echo $_label ?></div>
        <div class="col-xs-9"><?php echo end($this->global->formsStack)["f_name"]->getControl() /* line 48 */ ?></div>
        <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["ic"]->getLabel()) echo $_label ?></div>
        <div class="col-xs-9"><?php echo end($this->global->formsStack)["ic"]->getControl() /* line 50 */ ?></div>
        <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["dic"]->getLabel()) echo $_label ?></div>
        <div class="col-xs-9"><?php echo end($this->global->formsStack)["dic"]->getControl() /* line 52 */ ?></div>
        </div>
    </div>
    <div class="col-md-12 well">
            <div class="">
                <h5><?php echo end($this->global->formsStack)["onOtherAddress"]->getControl() /* line 57 */ ?></h5>
            </div>
        <div class=""  id="other_address" >
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["o_street"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["o_street"]->getControl() /* line 61 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["o_city"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["o_city"]->getControl() /* line 63 */ ?></div>
            <div class="col-xs-3"><?php if ($_label = end($this->global->formsStack)["o_zip"]->getLabel()) echo $_label ?></div>
            <div class="col-xs-9"><?php echo end($this->global->formsStack)["o_zip"]->getControl() /* line 65 */ ?></div> 
        </div>
    </div>
        <div class="col-md-12">
            <button type="button" class=" btn btn-danger btn-lg pull-left" onclick="window.history.back();">Zpět do košíku</button>
            <?php echo end($this->global->formsStack)["submit"]->getControl() /* line 70 */ ?>

        </div>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>


<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?><h1>Objednávka</h1>
<?php
	}

}
