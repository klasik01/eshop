<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Auth/default.latte

use Latte\Runtime as LR;

class Template11db3b9ae2 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?><link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1 */ ?>/css/Login-Form-Clean.css" rel="stylesheet">
<link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 2 */ ?>/css/bootstrap.min.css" rel="stylesheet">

<div class="login-clean">
    <?php
		/* line 5 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["loginForm"], ['role'=>'form']);
?>

        <h2 class="text-center">Přihlačovací formulář</h2>
        <div class="illustration"><i class="icon icon-feature"></i></div>
        <div class="p">
            <?php echo end($this->global->formsStack)["email"]->getControl()->addAttributes(['class'=>'form-control', 'placeholder'=>'Email']) /* line 9 */ ?>

        </div>
        <div class="">
            <?php echo end($this->global->formsStack)["password"]->getControl()->addAttributes(['class'=>'form-control', 'placeholder'=>'Heslo']) /* line 12 */ ?>

        </div>
        <div class="col-xs-12">
            <?php echo end($this->global->formsStack)["submit"]->getControl()->addAttributes(['class'=>'btn btn-primary btn-block']) /* line 15 */ ?>

        </div><div class="clearfix"></div>     
    <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

</div>

<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
