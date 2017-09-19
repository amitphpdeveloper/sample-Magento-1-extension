<?php

/**
 * Team Magento ProductList
 *
 * @category   Team Magento
 * @package    ProductList
 * @author     Team magento <amitlrajdev@gmail.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class Tm_ProductList_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_PRODUCTLIST_ENABLE = 'product_list/genneral_setting/enabled';
	const XML_PATH_PRODUCT_TO_SHOW = 'product_list/settings/product_number_to_show';
	
	/**
     * Check for Tm Product list is Enabled
     * @return bool
     */
    public function isProductListEnable() {
        return $this->getConfigData(self::XML_PATH_PRODUCTLIST_ENABLE, true);
    }
	
	/**
     * get number of product to show
     * @return bool
     */
    public function getProductToShow() {
        return $this->getConfigData(self::XML_PATH_PRODUCT_TO_SHOW);
    }
	
	/**
     * Returns core_config_data path's value
     * @param type string config path
     * @param type bool 
     * @return mixed
     */
    public static function getConfigData($config_path, $flag = false) {
        if ($flag) {
            return Mage::getStoreConfigFlag($config_path);
        } else {
            return Mage::getStoreConfig($config_path);
        }
    }
	
	
	
}
	 