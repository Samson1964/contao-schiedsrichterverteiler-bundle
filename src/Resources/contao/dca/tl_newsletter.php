<?php
print_r($GLOBALS['TL_DCA']['tl_newsletter']['config']);
$GLOBALS['TL_DCA']['tl_newsletter']['config']['onload_callback'][] = array
(
	array('tl_newsletter_schiedsrichterverteiler', 'addTemplateWarning')
);

/**
 * Class tl_newsletter_schiedsrichterverteiler
 */
class tl_newsletter_schiedsrichterverteiler extends \Backend
{

	/**
	 * Add a warning if there are users with access to the template editor.
	 */
	public function addTemplateWarning()
	{
		if (Input::get('act') && Input::get('act') != 'select')
		{
			//return;
		}

		//$objResult = $this->Database->query("SELECT EXISTS(SELECT * FROM tl_user_group WHERE modules LIKE '%\"tpl_editor\"%') as showTemplateWarning, EXISTS(SELECT * FROM tl_user_group WHERE themes LIKE '%\"theme_import\"%') as showThemeWarning");

		Message::addInfo($GLOBALS['TL_LANG']['MSC']['groupTemplateEditor']);
	}
}
