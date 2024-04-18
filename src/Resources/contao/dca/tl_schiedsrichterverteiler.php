<?php

/**
 * Tabelle tl_schiedsrichterverteiler
 */
$GLOBALS['TL_DCA']['tl_schiedsrichterverteiler'] = array
(

	// Konfiguration
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),

	// Datensätze auflisten
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('standard', 'titel'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit',
		),
		'label' => array
		(
			'fields'                  => array('standard', 'titel', 'selektion', 'lizenzstatus', 'lizenz'),
			'showColumns'             => true,
			'format'                  => '%s',
			'label_callback'          => array('tl_schiedsrichterverteiler','addDefaultIcon')
		),
		'global_operations' => array
		(
			'setDefault' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['setDefault'],
				'icon'                => 'bundles/contaoschiedsrichterverteiler/images/default.png',
				'href'                => 'key=setDefault',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif',
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'toggle' => array
			(
				'label'                => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['toggle'],
				'attributes'           => 'onclick="Backend.getScrollOffset()"',
				'haste_ajax_operation' => array
				(
					'field'            => 'published',
					'options'          => array
					(
						array('value' => '', 'icon' => 'invisible.svg'),
						array('value' => '1', 'icon' => 'visible.svg'),
					),
				),
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif',
				'attributes'          => 'style="margin-right:3px"'
			),
		)
	),

	// Paletten
	'palettes' => array
	(
		'default'                     => '{verteiler_legend},titel,selektion,lizenzstatus,lizenz;{publish_legend},published'
	),

	// Felder
	'fields' => array
	(
		'id' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['id'],
			'sorting'                 => true,
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['tstamp'],
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'standard' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['standard'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'flag'                    => 12,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'titel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['titel'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array
			(
				'mandatory'           => true,
				'maxlength'           => 255,
				'tl_class'            => 'long'
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'selektion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['selektion'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array
			(
				'mandatory'           => false,
				'maxlength'           => 255,
				'tl_class'            => 'long'
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'lizenzstatus' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['lizenzstatus'],
			'inputType'               => 'checkboxWizard',
			'search'                  => true,
			'exclude'                 => true,
			'options'                 => $GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['lizenzstatus_optionen'],
			'eval'                    => array
			(
				'multiple'            => true,
				'tl_class'            => 'w50'
			),
			'sql'                     => "text NULL"
		),
		'lizenz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['lizenz'],
			'inputType'               => 'checkboxWizard',
			'search'                  => true,
			'exclude'                 => true,
			'options'                 => $GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['lizenz_optionen'],
			'eval'                    => array
			(
				'multiple'            => true,
				'tl_class'            => 'w50'
			),
			'sql'                     => "text NULL"
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schiedsrichterverteiler']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'default'                 => 1,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
	)
);

/**
 * Class tl_schiedsrichterverteiler
 */
class tl_schiedsrichterverteiler extends Backend
{

	/**
	 * Add an image to each record
	 * @param array
	 * @param string
	 * @param DataContainer
	 * @param array
	 * @return string
	 */
	public function addDefaultIcon($row, $label, $dc, $args)
	{

		//echo "<pre>";
		//print_r($row);
		//print_r($args);
		//echo "</pre>";
		if($row['standard'])
		{
			// Standard
			$status = sprintf('<img src="bundles/contaoschiedsrichterverteiler/images/ok-icon.png" width="16" height="16" alt="" style="padding-left: 18px;">', TL_ASSETS_URL, \Backend::getTheme());
		}
		else
		{
			// Normal
			$status = sprintf('<img src="bundles/contaoschiedsrichterverteiler/images/blank-icon.png" width="16" height="16" alt="" style="padding-left: 18px;">', TL_ASSETS_URL, \Backend::getTheme());
		}

		$args[0] = sprintf('<div class="list_icon_new">%s</div>', $status);
		
		// Selektion ändern (3. Spalte)
		//if($args[2] == '0') $args[2] = '&#48;';
		return $args;
	}

}
