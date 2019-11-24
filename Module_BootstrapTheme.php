<?php
namespace GDO\BootstrapTheme;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;

final class Module_BootstrapTheme extends GDO_Module
{
	public function getThemes() { return ['bootstrap']; }

	public function getDependencies() { return ['Bootstrap', 'FontAwesome']; }
	
	public function onIncludeScripts()
	{
		$min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
		
		$this->addBowerCSS("bootstrap-slider/dist/css/bootstrap-slider$min.css");
		$this->addBowerJavascript("bootstrap-slider/dist/bootstrap-slider$min.js");
		
		$this->addCSS("css/gdo-bootstrap-theme-sidebar.css");
		$this->addCSS("css/gdo-bootstrap-theme-gdo.css");
		$this->addJavascript("js/gdo-bootstrap-theme.js");
	}
	
}
