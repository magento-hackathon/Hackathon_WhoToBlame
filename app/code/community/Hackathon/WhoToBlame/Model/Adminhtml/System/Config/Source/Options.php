<?php
/**
 * Created by IntelliJ IDEA.
 * User: Richard.Vogel
 * Date: 01.06.13
 * Time: 23:29
 * To change this template use File | Settings | File Templates.
 */

class Hackathon_WhoToBlame_Model_Adminhtml_System_Config_Source_Options
{
    public function toOptionArray()
    {
        $entityTypes = Mage::helper('hackathon_whotoblame')->getPossibleEntityTypes();

        foreach ($entityTypes as $type) {
            $result[] = array('value' => $type, 'label' => $type);
        }
        return $result;
    }
}