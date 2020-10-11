<?php
use GDO\File\GDO_File;
use GDO\UI\GDT_Icon;
/** @var $field \GDO\File\GDT_File **/
$file = $field->getValue();
$file instanceof GDO_File;
?>

<div class="form-group">
  <img 
   id="preview-image-<?=$field->name?>"
   class="gdt-file-image-preview"
<?php if ($file && $file->isPersisted()) : ?>
   src="<?=$field->displayPreviewHref($file)?>" />
<?php else : ?>
<?php endif; ?>
</div>


<div class="form-group gdo-flow-file <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <?=$field->displayLabel()?>
  <div class="input-group">
    <label class="input-group-btn">
        <span class="btn btn-primary">
            Browse&hellip;
            <input
<?php if ($field->multiple) : ?>
             multiple="multiple"
<?php endif; ?>
             name="<?=$field->name?>"
             type="file"
             style="display:none;" />
        </span>
    </label>
    <input
     type="text"
     class="form-control"
     id="gdo-file-preview-<?=$field->name?>"
<?php if ($file && $file->isPersisted()) : ?>
     value="<?=$file->displayName()?>"
<?php endif; ?>
     readonly />
<?php if ($file && $file->isPersisted()) : ?>
<?php 
$icon = GDT_Icon::make()->icon('delete')->render();
$deleteButton = sprintf('<button class="gdt-file-remove" type="submit" name="delete_%s[%s]" value="Remove File">%s</button>', $field->name, $file->getID(), $icon);
echo $deleteButton;
?>
<?php endif; ?>
    
  </div>
  <?= $field->htmlError(); ?>
</div>
