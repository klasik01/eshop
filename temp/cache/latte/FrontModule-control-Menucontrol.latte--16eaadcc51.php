<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\control/Menucontrol.latte

use Latte\Runtime as LR;

class Template16eaadcc51 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 levy_menu">                
    <div class="panel-group">
        <div class="panel panel-heading mystylePanelHeading subMenuItem  <?php
		if ($this->global->uiPresenter->isLinkCurrent("Product:Default")) {
			?> subMenuItemActive <?php
		}
		?>" data-href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Product:Default")) ?>">
            <h1 class="panel-title">Truhlářská výroba</h1></div>
        <div class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="table">
                    <table class="table table-hover table-condensed">
                        <tbody class="left-menu">
<?php
		$iterations = 0;
		foreach ($menuItems as $item) {
			if ($item->id != 13) {
?>
                                <tr>
                                    <td class="subMenuItem" data-href='<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Product:Category", [$item->id])) ?>'><a href="<?php
				echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Product:Category", [$item->id])) ?>"><?php
				echo LR\Filters::escapeHtmlText($item->nazev) /* line 13 */ ?></a></td>
                                </tr>
<?php
			}
			$iterations++;
		}
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-group">
            <div class="panel panel-heading mystylePanelHeading subMenuItem">
                <h1 class="panel-title"><a> Včelí oddělky + matky</a></h1></div>
        </div>
        <div class="panel-group">
            <div class="panel panel-heading mystylePanelHeading subMenuItem <?php
		if ($this->global->uiPresenter->isLinkCurrent("Product:Category", [13])) {
			?> subMenuItemActive <?php
		}
		?>" data-href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Product:Category", [13])) ?>">
                <h1 class="panel-title">Med</h1></div>
        </div>
        <div class="panel-group">
            <div class="panel panel-heading mystylePanelHeading subMenuItem">
                <h1 class="panel-title"><a>Vybavení medárny</a></h1></div>
        </div>
    </div>
    <div></div>
</div><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 10');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
