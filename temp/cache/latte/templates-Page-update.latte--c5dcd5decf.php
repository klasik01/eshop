<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Page/update.latte

use Latte\Runtime as LR;

class Templatec5dcd5decf extends Latte\Runtime\Template
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

<div class="col-xs-12">
	<div class="box-header">
		<h3 class="box-title">Aktualizovat článek</h3>
	</div>
	<div class="box-body">
<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("form");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
	</div>
</div><?php
	}

}
