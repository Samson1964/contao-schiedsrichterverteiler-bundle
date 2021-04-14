<?php
// Onload_Callback hinzufügen, um einen Hinweis anzuzeigen
$GLOBALS['TL_DCA']['tl_newsletter']['config']['onload_callback'][] = array('tl_newsletter_schiedsrichterverteiler', 'addTemplateWarning');

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
		if((\Input::get('table') == 'tl_newsletter' || \Input::get('table') == 'tl_newsletter_recipients') && \Input::get('id') == $GLOBALS['TL_CONFIG']['schiedsrichter_newsletter'] && !\Input::get('act'))
		{
			// Standardverteilerdaten laden
			$result = \Database::getInstance()->prepare("SELECT * FROM tl_schiedsrichterverteiler WHERE standard = ?")
			                                  ->limit(1)
			                                  ->execute(1);
			if($result->numRows)
			{
				$verteiler = $result->titel;
			}
			else
			{
				$verteiler = '-';
			}

			\Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_newsletter']['schiedsrichterverteiler_hinweis'], $verteiler));
		}

	}
}
