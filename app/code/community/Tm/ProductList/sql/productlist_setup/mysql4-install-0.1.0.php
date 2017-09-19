<?php

/**
 * Team Magento ProductList
 *
 * @category   Team Magento
 * @package    ProductList
 * @author     Team magento <amitlrajdev@gmail.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

$installer = $this;
$installer->startSetup();

$attrCode = 'handle_display';
$setup = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$setup->removeAttribute('catalog_product', $attrCode);

$setup->addAttribute(Mage_Catalog_Model_Product::ENTITY, $attrCode, array(
        'group'                     => 'Tm Attribute',
        'input'                     => 'select',
        'type'                      => 'int',
        'label'                     => 'Handle display',
        'source'                    => 'eav/entity_attribute_source_boolean',
        'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'                   => 1,
        'required'                  => 0,
        'visible_on_front'          => 1,
        'is_html_allowed_on_front'  => 0,
        'is_configurable'           => 0,
        'searchable'                => 0,
        'filterable'                => 0,
        'comparable'                => 0,
        'unique'                    => false,
        'user_defined'              => false,
        'default'           		=> '0',
        'is_user_defined'           => false,
        'used_in_product_listing'   => true
));

$this->endSetup();

?>