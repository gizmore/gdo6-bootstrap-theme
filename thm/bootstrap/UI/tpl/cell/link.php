<?php /** @var $link \GDO\UI\GDT_Link **/ ?>
<span class="<?=$link->htmlClass()?>">
  <a
   <?=$link->htmlID()?>
   <?=$link->htmlAttributes()?>
   <?=$link->htmlTarget()?>
   <?=$link->htmlHREF()?>
   href="<?=html($link->href)?>"><?=$link->htmlIcon()?><?=$link->displayLabel()?></a>
</span>
