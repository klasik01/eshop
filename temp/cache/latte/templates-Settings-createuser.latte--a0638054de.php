<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Settings/createuser.latte

use Latte\Runtime as LR;

class Templatea0638054de extends Latte\Runtime\Template
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

<div class="col-md-8 col-md-offset-2">
	<div class="">
		<h3 class="box-title">Vytvořit nového uživatele</h3>
	</div>
	<div class="col-md-12">
<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("formUser");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
	</div>
        <button type="button" class="btn btn-lg btn-danger form-control" onclick="window.history.back();">Zpět</button>
</div><?php
	}

}
