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
 * Observer Model Common
 *
 * @category	Hackathon
 * @package		Hackathon_WhoToBlame
 * @subpackage	Model
 * @author		Sebastian Wagner <sebastian.wagner@tritum.de>
 * @since		0.1.0
 */
class Hackathon_WhoToBlame_Model_Observer_Common
{

	/**
	 * @var Hackathon_WhoToBlame_Helper_Config
	 */
	private $_configHelper;

	/**
	 * @var Hackathon_WhoToBlame_Helper_Data
	 */
	private $_dataHelper;

	/**
	 * check if Module is Enabled
	 *
	 * @return bool
	 */
	protected function isEnabled()
	{
		/**
		 * @var $configHelper Hackathon_WhoToBlame_Helper_Config
		 */
		$configHelper = $this->getConfigHelper();
		return $configHelper->isEnabled();
	}

	/**
	 * Cached get config helper
	 * 
	 * @return Hackathon_WhoToBlame_Helper_Config
	 */
	public function getConfigHelper()
	{
		if(!$this->_configHelper) {
			$this->_configHelper = Mage::helper('hackathon_whotoblame/config');
		}
		return $this->_configHelper;
	}

	/**
	 * Cached get config helper
	 *
	 * @return Hackathon_WhoToBlame_Helper_Config
	 */
	public function getHelper()
	{
		if(!$this->_dataHelper) {
			$this->_dataHelper = Mage::helper('hackathon_whotoblame/data');
		}
		return $this->_dataHelper;
	}

	/**
	 * @param Varien_Event_Observer $observer
	 * @return Hackathon_WhoToBlame_Model_Observer_Common
	 */
	public function eventToListenTo(Varien_Event_Observer $observer)
	{
		return $this;
	}

}
