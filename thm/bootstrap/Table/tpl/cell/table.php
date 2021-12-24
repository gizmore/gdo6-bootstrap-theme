<?php
/** @var $field \GDO\Table\GDT_Table **/
/** @var $form \GDO\Form\GDT_Form **/
use GDO\Util\Common;
$headers = $field->getHeaderFields();
$_pagemenu = '';
if ($pagemenu = $field->getPageMenu())
{
	$_pagemenu = $pagemenu->render();
	echo $_pagemenu;
}
$result = $field->getResult();
?>
<div
 class="gdt-table">
<?php if (!$form) : ?>
<form method="get" action="<?=$field->href?>" class="b">
<?php endif; ?>
<?php if (!GDO_SEO_URLS) : ?>
  <input type="hidden" name="mo" value="<?= html(Common::getRequestString('mo','')); ?>" />
  <input type="hidden" name="me" value="<?= html(Common::getRequestString('me','')); ?>" />
<?php endif; ?>
  <?php if ($field->hasTitle()) : ?>
  <h3><?= $field->renderTitle(); ?></h3>
  <?php endif; ?>
  <table id="gwfdt-<?= $field->name; ?>" class="table table-responsive table-striped">
	<thead>
	  <tr>
	  <?php foreach($headers as $gdt) : ?>
	  <?php if (!$gdt->hidden) : ?>
		<th class="<?= $gdt->htmlClass(); ?>">
		  <label>
			<?= $gdt->renderHeader(); ?>
			<?php if ($field->ordered) : ?>
			<?= $gdt->displayTableOrder($field); ?>
			<?php endif; ?>
		  </label>
		  <?php if ($field->filtered) : ?>
		  <br/><?= $gdt->renderFilter($field->headers->name); ?>
		  <?php endif; ?>
		</th>
	  <?php endif; ?>
	  <?php endforeach; ?>
	  </tr>
	</thead>
	<tbody>
	<?php if ($field->fetchInto) : ?>
	<?php $dummy = $field->gdtTable->cache->getDummy(); ?>
	<?php while ($gdo = $result->fetchInto($dummy)) : ?>
	<tr data-gdo-id="<?=$gdo->getID()?>">
	  <?php foreach($headers as $gdt) :
	  if (!$gdt->hidden) : 
	  ?>
		<td class="<?=$gdt->htmlClass()?>"><?=$gdt->gdo($gdo)->renderCell()?></td>
	  <?php endif; ?>
	  <?php endforeach; ?>
	</tr>
	<?php endwhile; ?>
	<?php else : ?>
	<?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
	<tr data-gdo-id="<?=$gdo->getID()?>">
	  <?php foreach($headers as $gdt) :
	  if (!$gdt->hidden) : 
	  ?>
		<td class="<?=$gdt->htmlClass()?>"><?=$gdt->gdo($gdo)->renderCell()?></td>
	  <?php endif; ?>
	  <?php endforeach; ?>
	</tr>
	<?php endwhile; ?>
	<?php endif; ?>
	</tbody>
	<tfoot>
	  <?=$field->actions()->render()?>
	</tfoot>
  </table>
  <input type="submit" class="n" />
<?php if (!$form) : ?>
 </form>
<?php endif; ?>
</div>
<!-- END of GDT_Table -->
<?=$_pagemenu?>
