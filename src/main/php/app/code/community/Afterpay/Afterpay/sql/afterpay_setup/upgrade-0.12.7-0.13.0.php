<?php
/**
 * @package   Afterpay_Afterpay
 * @author    Afterpay <steven.gunarso@touchcorp.com>
 * @copyright Copyright (c) 2016 Afterpay (http://www.afterpay.com.au)
 */
$installer = $this;

$installer->startSetup();

/**
 * Setup script to create new column on sales_flat_quote_payment for:
 * - afterpay_token
 * - afterpay_order_id
 */

try{
	$table = $installer->getTable('sales/quote_payment');
	$installer->getConnection()->addColumn($table, 'afterpay_token', "varchar(255) DEFAULT NULL COMMENT 'Afterpay Order Token'");
	$installer->getConnection()->addColumn($table, 'afterpay_order_id', "varchar(255) DEFAULT NULL COMMENT 'Afterpay Order ID'");	
}
catch( Exception $e ) {

}
$installer->endSetup();
?>