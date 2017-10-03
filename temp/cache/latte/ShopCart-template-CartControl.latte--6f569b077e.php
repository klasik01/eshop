<?php
// source: C:\xampp\htdocs\Pesek\vendor\Kasika\ShopCart/template/CartControl.latte

use Latte\Runtime as LR;

class Template6f569b077e extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>

<?php
		if ($cart->empty) {
?>
    <p>
        Váš košík je prázdný
    </p>
<?php
		}
		else {
			?>    <?php
			/* line 7 */
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["updateForm"], []);
?>

<?php
			$iterations = 0;
			foreach ($form->errors as $error) {
?>        <div class="alert alert-error fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo LR\Filters::escapeHtmlText($error) /* line 10 */ ?>

        </div>
<?php
				$iterations++;
			}
?>
        <table class="table table-hover table-striped" id="cart">
            <thead>
                <tr>
<?php
			if ($showImage+$showName) {
				?>                    <th class="name" colspan="<?php echo LR\Filters::escapeHtmlAttr($showImage+$showName) /* line 15 */ ?>">Produkt</th>
<?php
			}
			if ($showPrice) {
?>                    <th class="price">Cena</th>
<?php
			}
			if ($showPrice) {
?>                    <th class="discount">Sleva</th>
<?php
			}
			if ($showQuantity) {
?>                    <th class="quantity">Množství</th>
<?php
			}
			if ($showTotal) {
?>                    <th class="total">Celkem</th>
<?php
			}
			if ($showDelete) {
?>                    <th class="delete"></th>
<?php
			}
?>
                </tr>
            </thead>
<?php
			Tracy\Debugger::barDump(get_defined_vars(), 'variables');
?>
            <tbody>
<?php
			$iterations = 0;
			foreach ($cart->getItems() as $key => $item) {
?>                <tr>
<?php
				if ($showImage) {
?>                    <td class="image">
<?php
					if ($this->global->ifs[] = ($item->link)) {
						?>                        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link($item->link, [$item->id])) ?>" class="thumbnail">
<?php
					}
					?>                            <img class="cart-item-image" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 28 */ ?>/<?php
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($item->image)) /* line 28 */ ?>">
<?php
					if (array_pop($this->global->ifs)) {
?>                        </a>
<?php
					}
?>
                    </td>
<?php
				}
				if ($showName) {
?>                    <td class="name">
<?php
					if ($this->global->ifs[] = ($item->link)) {
						?>                        <a href="" title="<?php echo LR\Filters::escapeHtmlAttr($item->name) /* line 32 */ ?>"><?php
					}
					echo LR\Filters::escapeHtmlText($item->name) /* line 32 */;
					if (array_pop($this->global->ifs)) {
?></a>
<?php
					}
					?>                        <label class="label label-primary"><?php echo LR\Filters::escapeHtmlText($item->type) /* line 33 */ ?></label>
                        <label class="label label-success"><?php echo LR\Filters::escapeHtmlText($item->material) /* line 34 */ ?></label>

                    </td>
<?php
				}
				if ($showPrice) {
					?>                    <td class="price"><?php echo LR\Filters::escapeHtmlText($item->price) /* line 37 */ ?>&nbsp;Kč</td>
<?php
				}
				if ($showPrice) {
					?>                    <td class="price"><?php echo LR\Filters::escapeHtmlText($item->discount) /* line 38 */ ?>&nbsp;Kč</td>
<?php
				}
				if ($showQuantity) {
					?>                    <td class="quantity"><input class="form-control"<?php
					$_input = is_object($key) ? $key : end($this->global->formsStack)[$key];
					echo $_input->getControlPart()->addAttributes(array (
					'class' => NULL,
					))->attributes() ?>> </td>
<?php
				}
				?>                    <td class="totalOfProduct"><?php echo LR\Filters::escapeHtmlText(($item->price - $item->discount) * $item->quantity) /* line 40 */ ?>&nbsp;Kč</td>
<?php
				if ($showDelete) {
					?>                    <td class="delete"><a class="btn " title="Delete" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$key])) ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
<?php
				}
?>
                </tr>
<?php
				$iterations++;
			}
?>            </tbody>
            <tfoot>
                <tr>
<?php
			if ($showImage+$showName+$showPrice) {
				?>                    <td colspan="<?php echo LR\Filters::escapeHtmlAttr($showImage+$showName+$showPrice+$showPrice) /* line 46 */ ?>"></td>
<?php
			}
			if ($showQuantity) {
?>                    <td><button class="btn btn-warning " type="submit" name="update"><i class="glyphicon glyphicon-refresh"></i></button></td>
<?php
			}
			if ($showTotal+$showDelete) {
				?>                    <td colspan="<?php echo LR\Filters::escapeHtmlAttr($showTotal+$showDelete) /* line 48 */ ?>" class="total">
                        <strong>Celkem:&nbsp;&nbsp;<span><?php echo LR\Filters::escapeHtmlText($cart->total) /* line 49 */ ?>&nbsp;Kč</span></strong>
                    </td>
<?php
			}
?>
                </tr>
            </tfoot>
        </table>
                    <button class="btn btn-info pull-left" type="submit" name="continue" onclick="window.history.back();"><i class="glyphicon glyphicon-arrow-left">&nbsp; Pokračovat v nákupu</i></button>
        <button class="btn btn-success pull-right" type="submit" name="next">Přejít k objednávce &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></button>
    <?php
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['error'])) trigger_error('Variable $error overwritten in foreach on line 8');
		if (isset($this->params['key'])) trigger_error('Variable $key overwritten in foreach on line 24');
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 24');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
