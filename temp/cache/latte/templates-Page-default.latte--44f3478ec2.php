<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Page/default.latte

use Latte\Runtime as LR;

class Template44f3478ec2 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 26');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Články</h3></div>
    <div class="panel-body">
        <div>
            <form method="get">
                <div class="input-group">
                    <input class="form-control" type="text" name="q" required="" placeholder="Hledej..." autocomplete="on" id="system-search"><span class="input-group-btn"> <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"> </span></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="table-container">
            <div class="table-responsive table-filter table-list-search">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Název</th>                           
                            <th>Akce</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
		$iterations = 0;
		foreach ($pages as $item) {
?>                        <tr>
                            <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:Detail", [$item->article_id])) ?>"><?php
			echo LR\Filters::escapeHtmlText($item->title) /* line 27 */ ?></a></td>

                            <td class="">
                                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:Update", [$item->article_id])) ?>"> <span class="glyphicon glyphicon-edit"> </span></a>
                                <a
                                    data-confirm="Opravdu chcete článek ' <?php echo LR\Filters::escapeHtmlAttr($item->title) /* line 32 */ ?> ' smazat?"
                                    data-confirm-title="Confirm"
                                    data-confirm-text="Opravdu chcete článek ' <?php echo LR\Filters::escapeHtmlAttr($item->title) /* line 34 */ ?> ' smazat?"
                                    data-confirm-ok-class="btn-danger"
                                    data-confirm-ok-text="Delete"
                                    data-confirm-cancel-class="btn-success"
                                    data-confirm-cancel-text="Cancel"
                                    class="btn btn-danger btn-mini"
                                    data-ajax="on" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete!", [$item->article_id])) ?>"><span class="glyphicon glyphicon-remove" data-confirm="Opravdu chcete vybraný produkt odstranit?"> </span></a>

                            </td>
                        </tr>
<?php
			$iterations++;
		}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php
	}

}
