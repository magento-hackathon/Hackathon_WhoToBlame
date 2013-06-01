<?php
/**
 * Hackathon_WhoToBlame extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category	Hackathon
 * @package		Hackathon_WhoToBlame
 * @copyright	Copyright © 2013 TRITUM GmbH ( http://www.tritum.de )
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Config Helper Class
 *
 * @category	Hackathon
 * @package		Hackathon_WhoToBlame
 * @subpackage	Helper
 * @author		Sebastian Wagner <sebastian.wagner@tritum.de>
 * @since		0.1.0
 */
class Hackathon_WhoToBlame_Helper_Config
	extends Mage_Core_Helper_Abstract
	//extends Hackathon_WhoToBlame_Helper_Config_Abstract
{

	/**
	 * Is Module enabled in System config
	 */
	const XML_PATH_ENABLED = 'hackathon_whotoblame/trigger/enable';

	/**
	 * @var Mixed
	 */
	private $_isEnabled;

	/**
	 * Cached check if Module is Enabled
	 *
	 * @return bool
	 */
	public function isEnabled()
	{
		/*
		//is other module enabled, we depend on?
		if(!Mage::helper('core')->isModuleEnabled('Hackathon_Othermodule')) {
		}
		*/
		if(!isset($this->_isEnabled)) {
			$this->_isEnabled = Mage::getStoreConfigFlag(self::XML_PATH_ENABLED);
		}
		return $this->_isEnabled;
	}

}
