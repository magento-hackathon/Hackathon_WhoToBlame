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
 * @category    Hackathon
 * @package        Hackathon_WhoToBlame
 * @copyright    Copyright © 2013 TRITUM GmbH ( http://www.tritum.de )
 * @license        http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Helper Class
 *
 * @category    Hackathon
 * @package        Hackathon_WhoToBlame
 * @subpackage    Helper
 * @author        Sebastian Wagner <sebastian.wagner@tritum.de>
 * @since        0.1.0
 */
class Hackathon_WhoToBlame_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    public function getPossibleEntityTypes()
    {
        $dbAdapter = Mage::getSingleton('core/resource')
                     ->getConnection('core_read');
        $select = $dbAdapter
                  ->select()
                  ->from('eav_entity_type', array('entity_type_code'));

        return $dbAdapter->fetchCol($select);
    }

}
