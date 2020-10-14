<?php
use GDO\Tag\GDT_TagCloud;
/** @var $field GDT_TagCloud **/
$filterValue = $field->filterValue();
?>
<div class="gdo-tag-cloud">
<?php foreach ($field->getTags() as $tag) : ?>
  <a
   href="<?= $field->hrefTagFilter($tag); ?>"
   class="badge <?= $filterValue === $tag->getID() ? 'badge-primary' : 'badge-secondary'; ?>">
    <span><?= $tag->displayName(); ?>(<?= $tag->getCount(); ?>)</span>
 </a>
<?php endforeach; ?>
  <input type="hidden" name="f[<?= $field->name; ?>]" value="<?= html($filterValue); ?>" />
</div>
