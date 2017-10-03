<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Page/detail.latte

use Latte\Runtime as LR;

class Template03f89fb40e extends Latte\Runtime\Template
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
<button class="btn btn-success btn-lg form-control" type="button" onclick="window.history.back();">Vrátit se zpět</button>

<?php
		echo $article->content /* line 6 */;
	}

}
