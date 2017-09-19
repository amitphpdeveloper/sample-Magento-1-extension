<?php

/**
 * Team Magento ProductList
 *
 * @category   Team Magento
 * @package    ProductList
 * @author     Team magento <amitlrajdev@gmail.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/
   
class Tm_ProductList_Block_Customer_Link extends Mage_Core_Block_Template{   

 /*
 * Add Navigation menu item in my account section
 */
 public function addLinkToParentBlock() 
    {
		$helper = Mage::helper('productlist');
        $parent = $this->getParentBlock();
        if ($parent) {
            if ($helper->isProductListEnable()) {
                $parent->addLink(
                    'Tm ProductList',
                    'productlist',
                    'Tm ProductList'
                );

            }
        } 
    }


}