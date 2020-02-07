<?php
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_Tooltip;
/** @var $field GDT_Tooltip **/
$field instanceof GDT_Tooltip; ?>
<?php if ($field->tooltipText) : ?>
<a href="#" data-toggle="tooltip" title="<?=html($field->tooltipText)?>"><?=GDT_Icon::iconS('help')?></a>
<?php endif; ?>
