<?php
/**
 * Created by IntelliJ IDEA.
 * User: Richard.Vogel
 * Date: 01.06.13
 * Time: 22:53
 * To change this template use File | Settings | File Templates.
 */

require_once('../../../../../Mage.php');

class HelperTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        Mage::app('admin');
    }

    public function testIfBaseEntityTypesExist()
    {
        $helper = Mage::helper('hackathon_whotoblame');
        $this->assertNotNull($helper);

        $entityTypes = $helper->getPossibleEntityTypes();

        foreach ($this->getDefaults() as $type) {
            $this->assertContains($type, $entityTypes);
        }
    }

    public function getDefaults(){
        return array('catalog_product','customer','order','quote','invoice');
    }

    public function testIfConfigHelperWorks(){
        $types = Mage::getStoreConfig('hackathon_whotoblame/trigger/optionmultiselect');
             foreach(explode(',',$types) as $type) {
                 $this->assertContains($type,$this->getDefaults());
             }

    }
}
