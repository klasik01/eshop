<?php
// source: C:\xampp\htdocs\Pesek\app\AdminModule\presenters/templates/Settings/users.latte

use Latte\Runtime as LR;

class Templatea3fb5c1837 extends Latte\Runtime\Template
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
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 27');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Uživatelé</h3></div>
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
                            <th>Jméno:</th>                           
                            <th>Role:</th>                           
                            <th>Email:</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
		$iterations = 0;
		foreach ($users as $item) {
?>                        <tr>
                            <td><?php echo LR\Filters::escapeHtmlText($item->name) /* line 28 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->role) /* line 29 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($item->email) /* line 30 */ ?></td>

                            <td class="">
                                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:Updateuser", [$item->id])) ?>"> <span class="glyphicon glyphicon-edit"> </span></a>
<?php
			if ($user->isInRole('admin')) {
?>
                                    <a
                                        data-confirm="Opravdu chcete uživatele ' <?php echo LR\Filters::escapeHtmlAttr($item->name) /* line 36 */ ?> ' smazat?"
                                        data-confirm-title="Confirm"
                                        data-confirm-text="Opravdu chcete uživatele ' <?php echo LR\Filters::escapeHtmlAttr($item->name) /* line 38 */ ?> ' smazat?"
                                        data-confirm-ok-class="btn-danger"
                                        data-confirm-ok-text="Delete"
                                        data-confirm-cancel-class="btn-success"
                                        data-confirm-cancel-text="Cancel"
                                        class="btn btn-danger btn-mini"
                                        data-ajax="on" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("deleteuser!", [$item->id])) ?>"><span class="glyphicon glyphicon-remove"> </span></a>

<?php
			}
?>
                            </td>
                        </tr>
<?php
			$iterations++;
		}
?>
                    </tbody>
                    <tfood>
                        <a class="pull-right btn btn-primary btn-lg" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:createuser")) ?>">vytvořit nového uživatele</a>
                    </tfood>
                </table>
            </div>
        </div>
    </div>
</div>




<?php
	}

}
