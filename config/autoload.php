<?php
	// config/autoload.php
	/**
	 * Variables
	 */
	$strFolder      = 'bs_timeline';
	$strNamespace   = 'timeline\\' . $strFolder;
	 
	/**
	 * Register the namespaces
	 */
	ClassLoader::addNamespaces(array
	(
	    $strNamespace
	));
	 
	/**
	 * Register the classes
	 */
	ClassLoader::addClasses(array
	(
	    // Elements
	    $strNamespace . '\\classes\\elements\\ContentProduct' => "system/modules/$strFolder/classes/elements/ContentProduct.php"
	));
	 
	/**
	 * Register the templates
	 */
	TemplateLoader::addFiles(array
	(
	    'ce_timeline' => "system/modules/$strFolder/templates",
));	
?>