<?php
namespace GDO\BootstrapTheme;

use GDO\Core\GDO_Module;

final class Module_BootstrapTheme extends GDO_Module
{
	public function getThemes() { return ['bootstrap']; }

	public function getDependencies() { return ['Bootstrap', 'FontAwesome']; }
	
	public function onIncludeScripts()
	{
		$this->addCSS("css/gdo-bootstrap-theme-sidebar.css");
		$this->addCSS("css/gdo-bootstrap-theme-gdo.css");
		$this->addJavascript("js/gdo-bootstrap-theme.js");
	}
	
}
