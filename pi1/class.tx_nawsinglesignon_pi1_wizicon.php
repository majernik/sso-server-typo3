<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2003 Dietrich Heise (typo3-ext@naw.info)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
* Class that adds the wizard icon.
*
* @author Dietrich Heise <typo3-ext@naw.info>
*/
class tx_nawsinglesignon_pi1_wizicon {

	/**
	 * @param array $wizardItems
	 * @return array
	 */
	public function proc($wizardItems) {
		$labelArray = $this->includeLocalLang();
		$wizardItems['plugins_tx_nawsinglesignon_pi1'] = array(
		'icon' => t3lib_extMgm::extRelPath('naw_single_signon')."pi1/ce_wiz.gif",
			'title' => $this->getLanguageService()->getLLL('pi1_title', $labelArray),
			'description' => $this->getLanguageService()->getLLL('pi1_plus_wiz_description', $labelArray),
			'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=naw_single_signon_pi1' );

		return $wizardItems;
	}

	/**
	* This will return the labels array array of this extension
	*
	* @return array  the language translation for this extension
	*/
	protected function includeLocalLang() {
		return $this->getLanguageService()->includeLLFile('EXT:naw_single_signon/locallang.xml', FALSE);
	}

	/**
	 * @return language
	 */
	protected function getLanguageService() {
		return $GLOBALS['LANG'];
	}

}

if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/naw_single_signon/pi1/class.tx_nawsinglesignon_pi1_wizicon.php']) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/naw_single_signon/pi1/class.tx_nawsinglesignon_pi1_wizicon.php']);
}
