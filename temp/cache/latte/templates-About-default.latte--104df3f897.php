<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\presenters/templates/About/default.latte

use Latte\Runtime as LR;

class Template104df3f897 extends Latte\Runtime\Template
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
		$this->renderBlock('title', get_defined_vars());
		echo $context->content /* line 5 */;
	}


	function blockTitle($_args)
	{
		extract($_args);
?><h2 hidden>O nás</h2>
<?php
	}

}
