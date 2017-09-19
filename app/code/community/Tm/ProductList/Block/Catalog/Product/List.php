<?php

/**
 * Team Magento ProductList
 *
 * @category   Team Magento
 * @package    ProductList
 * @author     Team magento <amitlrajdev@gmail.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class Tm_ProductList_Block_Catalog_Product_List extends Mage_Catalog_Block_Product_List
{
	
	
	/**
     * Retrieve loaded product collection
     *
     * @return Mage_Catalog_Model_Resource_Product_Collection
     */
   protected function _getProductCollection()
	{
		
		if (is_null($this->_productCollection)) {
			
			$helper = Mage::helper('productlist');
			$itemtoshow = $helper->getProductToShow();
				
				
			$collection = Mage::getModel('catalog/product')->getCollection();
			$collection
			->addAttributeToSelect(Mage::getSingleton('catalog/config')->getProductAttributes())
			->addAttributeToSelect('handle_display')
			->addFieldToFilter(array(array('attribute' => 'handle_display', 'eq' => true)))
			->addMinimalPrice()
			->addFinalPrice()
			->addTaxPercents()->getSelect()->limit($itemtoshow);

			Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
			Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);
			$this->_productCollection = $collection;
			
			$this->getToolbarBlock()->setData('_current_limit', $itemtoshow);	
			
		 }
		
		return $this->_productCollection;
		
	}
}
			