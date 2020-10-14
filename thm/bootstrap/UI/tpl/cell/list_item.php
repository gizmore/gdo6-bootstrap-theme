<?php
/** @var $gdt \GDO\UI\GDT_ListItem **/
?>
<div
 class="list-group-item"
 <?=$gdt->htmlAttributes()?>>
<?php if ($gdt->image) : ?>
	<div class="fl" style="margin-right: 16px;"><?=$gdt->image->renderCell()?></div>
<?php endif; ?>
  <h5><?=$gdt->title->renderCell()?></h5>
  <div class="cb"></div>
  <small><?=$gdt->subtitle->renderCell()?></small>
  <p><?=$gdt->subtext->renderCell()?></p>
  <?=$gdt->actions()->render()?>
</div>
