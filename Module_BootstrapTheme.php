<?php
namespace GDO\BootstrapTheme;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\Core\Application;

/**
 * Bootstrap4 Theme.
 * @author gizmore
 * @version 6.10
 * @since 6.08
 */
final class Module_BootstrapTheme extends GDO_Module
{
	public function getThemes() { return ['bootstrap']; }

	public function getDependencies() { return ['Bootstrap', 'FontAwesome', 'Moment']; }
	
	public function onLoadLanguage() { return $this->loadLanguage('lang/bootstrap'); }
	
	public function onIncludeScripts()
	{
	    $themes = Application::instance()->getThemes();
	    if (in_array('bootstrap', $themes, true))
	    {
    		$min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
    		
    		$this->addBowerCSS("bootstrap-slider/dist/css/bootstrap-slider$min.css");
    		$this->addBowerJavascript("bootstrap-slider/dist/bootstrap-slider$min.js");
    		
    		$this->addBowerCSS("pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker$min.css");
    		$this->addBowerJavascript("pc-bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js");
    		
    		$this->addBowerJavascript("autocomplete.js/dist/autocomplete.jquery$min.js");
    		
    		$this->addBowerCSS("bootstrap-select/dist/css/bootstrap-select$min.css");
    		$this->addBowerJavascript("bootstrap-select/dist/js/bootstrap-select$min.js");
    		
    		$this->addCSS("css/gdo-bootstrap-theme-sidebar2.css");
    		$this->addCSS("css/gdo-bootstrap-theme-autocomplete.css");
    		$this->addCSS("css/gdo-bootstrap-theme-gdo.css");
    		$this->addCSS("css/gdo-bootstrap-theme-vote.css");
    
    		$this->addJavascript("js/gdo-bootstrap-theme.js");
    	
    		$this->addCSS("css/tagsinput.css");
    		$this->addJavascript("js/tagsinput.js");
	    }
	}
}
