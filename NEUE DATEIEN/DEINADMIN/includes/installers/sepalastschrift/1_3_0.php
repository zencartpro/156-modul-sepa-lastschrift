<?php
/**
 * @package Sepalastschrift
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: 1_3_0.php 2020-07-28 15:13:51Z webchills $
 */
 
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.3.0' WHERE configuration_key = 'SEPALASTSCHRIFT_MODUL_VERSION';");