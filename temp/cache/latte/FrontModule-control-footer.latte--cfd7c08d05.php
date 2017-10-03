<?php
// source: C:\xampp\htdocs\Pesek\app\FrontModule\control/footer.latte

use Latte\Runtime as LR;

class Templatecfd7c08d05 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>IROPE </h2>
                <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                <a href=" <?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link(":Admin:Homepage:default")) ?>">Administrace</a>
            </div>
            <div class="col-md-6">
                <div class="row icon-features">
                    <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-map-marker"></i>
                        <p>Adresa </p>
                        <p><?php echo LR\Filters::escapeHtmlText($footer->ulice) /* line 13 */ ?> , <?php
		echo LR\Filters::escapeHtmlText($footer->mesto) /* line 13 */ ?> <?php echo LR\Filters::escapeHtmlText($footer->psc) /* line 13 */ ?></p>
                    </div>
                    <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-earphone"></i>
                        <p>Kontakt </p>
                        <p><?php echo LR\Filters::escapeHtmlText($footer->tel) /* line 17 */ ?></p>
                    </div>
                    <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-envelope"></i>
                        <p>Email </p>
                        <p><?php echo LR\Filters::escapeHtmlText($footer->email) /* line 21 */ ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
