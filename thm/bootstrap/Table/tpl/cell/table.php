<?php /** @var $field \GDO\Table\GDT_Table **/
use GDO\Util\Common;
$headers = $field->getHeaderFields();
if ($pagemenu = $field->getPageMenu())
{
	echo $pagemenu->render();
}
$result = $field->getResult();
?>
<div
 class="gdo-table table-responsive">
<?php if (!$form) : ?>
<form method="get" action="<?=$field->href?>" class="b">
<?php endif; ?>
  <input type="hidden" name="mo" value="<?= html(Common::getGetString('mo','')); ?>" />
  <input type="hidden" name="me" value="<?= html(Common::getGetString('me','')); ?>" />
  <?php if ($field->hasTitle()) : ?>
  <h3><?= $field->renderTitle(); ?></h3>
  <?php endif; ?>
  <table id="gwfdt-<?= $field->name; ?>" class="table">
	<thead>
	  <tr>
	  <?php foreach($headers as $gdoType) : ?>
	  <?php if (!$gdoType->hidden) : ?>
		<th class="<?= $gdoType->htmlClass(); ?>">
		  <label>
			<?= $gdoType->renderHeader(); ?>
			<?php if ($field->ordered) : ?>
			<?= $gdoType->displayTableOrder($field); ?>
			<?php endif; ?>
		  </label>
		  <?php if ($field->filtered) : ?>
		  <br/><?= $gdoType->renderFilter($field->headers->name); ?>
		  <?php endif; ?>
		</th>
	  <?php endif; ?>
	  <?php endforeach; ?>
	  </tr>
	</thead>
	<tbody>
	<?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
	<tr gdo-id="<?=$gdo->getID()?>">
	  <?php foreach($headers as $gdoType) :
	  if (!$gdoType->hidden) : 
	  $col = $field->getField($gdoType->name);
	  $gdoType = $col ? $col : $gdoType;
	  $gdoType->gdo($gdo); ?>
		<td class="<?= $gdoType->htmlClass(); ?>"><?= $gdoType->gdo($gdo)->renderCell(); ?></td>
	  <?php endif; ?>
	  <?php endforeach; ?>
	</tr>
	<?php endwhile; ?>
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
