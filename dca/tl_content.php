<?php
	// dca/tl_content.php
	/**
	 * Table tl_content
	 */
	$strName = 'tl_content';
	 
	 
	/* Palettes */
	$GLOBALS['TL_DCA'][$strName]['palettes']['myproduct'] = '{type_legend},type;{description_legend},bs_de_def_tl_headline,bs_de_def_tl_sub_headline,bs_de_def_tl_text,singleSRC,alt,size,bs_de_def_tl_position,bs_de_def_tl_bool_first,bs_de_def_tl_bool_last;{invisible_legend:hide},invisible,start,stop;';
	 
	 
	/* Fields */
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_headline'] = array
	(
	    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_headline'],
	    'exclude'                 => true,
	    'inputType'               => 'text',
    	'eval'                    => array('tl_class' => 'w50'),
	    'sql'                     => "text NOT NULL"
	);
	 
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_sub_headline'] = array
	(
	    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_sub_headline'],
	    'exclude'                 => true,
	    'inputType'               => 'text',
    	'eval'                    => array('tl_class' => 'w50'),
	    'sql'                     => "text NOT NULL"
	);
	 
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_text'] = array
	(
	    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_text'],
	    'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'textarea',
		'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
		'explanation'             => 'insertTags',
		'sql'                     => "mediumtext NULL"
	);	
		
	
	 
	/*$GLOBALS['TL_DCA'][$strName]['fields']['singleSRC'] = array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
		'exclude'                 => true,
		'inputType'               => 'fileTree',
		'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>true, 'tl_class'=>'clr'),
		'load_callback' => array
		(
			array('tl_content', 'setSingleSrcFlags')
		),
		'save_callback' => array
		(
			array('tl_content', 'storeFileMetaInformation')
		),
		'sql'                     => "binary(16) NULL"
	);
	
	$GLOBALS['TL_DCA'][$strName]['fields']['alt'] = array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['alt'],
		'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	);
	
	$GLOBALS['TL_DCA'][$strName]['fields']['title'] => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['title'],
		'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	);
	
	$GLOBALS['TL_DCA'][$strName]['fields']['size'] => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['size'],
		'exclude'                 => true,
		'inputType'               => 'imageSize',
		'options'                 => System::getImageSizes(),
		'reference'               => &$GLOBALS['TL_LANG']['MSC'],
		'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
		'sql'                     => "varchar(64) NOT NULL default ''"
	);*/
	
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_position'] = array
	(
		'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_position'],
		'default'                 => 'left',
		'exclude'                 => true,
		'inputType'               => 'radioTable',
		'options'                 => array('left', 'right'),
		'eval'                    => array('cols'=>2, 'tl_class'=>'w50'),
		'reference'               => &$GLOBALS['TL_LANG']['MSC'],
		'sql'                     => "varchar(32) NOT NULL default ''"
	);
	
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_bool_first'] = array
	(
	    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_bool_first'],
	    'exclude'                 => true,
	    'inputType'               => 'checkbox',
	    'sql'                     => "char(1) NOT NULL default ''"
	);
	
	$GLOBALS['TL_DCA'][$strName]['fields']['bs_de_def_tl_bool_last'] = array
	(
	    'label'                   => &$GLOBALS['TL_LANG'][$strName]['bs_de_def_tl_bool_last'],
	    'exclude'                 => true,
	    'inputType'               => 'checkbox',
	    'sql'                     => "char(1) NOT NULL default ''"
	);
	
?>