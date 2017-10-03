<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Settings/contact.latte

use Latte\Runtime as LR;

class Template315b77069e extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Kontaktní údaje</h3></div>
    <div class="panel-body">       
        <div class="clearfix"></div>
        <div class="table-container">
            <div class="table-responsive table-filter table-list-search">
<?php
		/* line 10 */ $_tmp = $this->global->uiControl->getComponent("formContact");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
            </div>
        </div>
    </div>
</div>





<?php
	}

}
