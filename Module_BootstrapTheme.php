<?php
namespace GDO\BootstrapTheme;

use GDO\Core\GDO_Module;
use GDO\Core\Application;
use GDO\Bootstrap\Module_Bootstrap;
use GDO\Javascript\Module_Javascript;

/**
 * Bootstrap4 Theme.
 * 
 * Uses @link https://github.com/algolia/autocomplete.js/
 * 
 * @TODO override js gdo error function to show a nice dialog with a nice stacktrace.
 * 
 * @author gizmore
 * @version 6.10.3
 * @since 6.8.0
 */
final class Module_BootstrapTheme extends GDO_Module
{
	public function getTheme() { return 'bootstrap'; }

	public function getDependencies() { return ['Bootstrap', 'FontAwesome', 'Moment']; }
	
	public function onLoadLanguage() { return $this->loadLanguage('lang/bootstrap'); }
	
	public function onIncludeScripts()
	{
	    if (Application::instance()->hasTheme('bootstrap'))
	    {
	        $this->onIncludeBootstrap4();
	        
    		$min = Module_Javascript::instance()->jsMinAppend();
    		
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
	
	/**
	 * Include bootstrap4 if not done yet.
	 */
	private function onIncludeBootstrap4()
	{
	    $m = Module_Bootstrap::instance();
	    if (!$m->cfgIncludeBootstrap())
	    {
	        $m->onIncludeBootstrap4();
	    }
	}
}
