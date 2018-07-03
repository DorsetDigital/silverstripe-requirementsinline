<?php
namespace DorsetDigital\SilverstripeRequirements;

use SilverStripe\View\Requirements;
use SilverStripe\View\SSViewer;
use SilverStripe\View\ThemeResourceLoader;
use SilverStripe\Control\Director;

class RequirementsInline
{

 public static function themedJavascript($file, $uniqueId = null)
 {
  $path = ThemeResourceLoader::inst()->findThemedJavascript($file, SSViewer::get_themes());
  if ($path) {
   $script = file_get_contents(Director::baseFolder() . DIRECTORY_SEPARATOR . $path);
   Requirements::customScript($script, $uniqueId);
  } else {
   Requirements::customScript('// ' . $file . ' not found');
  }
 }

 public static function themedCSS($file, $uniqueId = null)
 {
  $path = ThemeResourceLoader::inst()->findThemedCSS($file, SSViewer::get_themes());
  if ($path) {
   $styles = file_get_contents(Director::baseFolder() . DIRECTORY_SEPARATOR . $path);
   Requirements::customCSS($styles, $uniqueId);
  } else {
   Requirements::customCSS('/* ' . $file . ' not found */');
  }  
 }
}
