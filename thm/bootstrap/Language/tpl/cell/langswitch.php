<?php
use GDO\Language\GDO_Language;
use GDO\Language\Module_Language;
use GDO\Language\Trans;

$languages = Module_Language::instance()->cfgSupported();
?>
<select
 onchange="GDO.Language.switch(this)"
 class="selectpicker gdo-lang-switch"
 data-width="fit">
<?php
foreach ($languages as $language) :
$language instanceof GDO_Language;
$sel = Trans::$ISO === $language->getISO() ? ' selected="selected"' : '';
$icon = <<<END
  <img
   class="gdo-language"
   alt="{$language->displayName()}"
   src="GDO/Language/img/{$language->getID()}.png" />
  {$language->displayName()}
END;
printf("<option data-content='%s' value=\"%s\"%s>%s</option>",
	$icon, $language->getISO(), $sel, $language->displayName());
endforeach;
?>  
</select>

<?php return; ?>
<div class="gdo-lang-switch">
 <form method="get">
  <input type="hidden" name="mo" value="Language" />
  <input type="hidden" name="me" value="SwitchLanguage" />
  <input type="hidden" name="ref" value="<?=html($_SERVER['REQUEST_URI'])?>" />
  <label><?php echo t('lbl_langswitch'); ?></label>
  <select name="lang">
  </select>
  <input type="submit" value="<?=t('btn_set')?>" />
 </form>
</div>
