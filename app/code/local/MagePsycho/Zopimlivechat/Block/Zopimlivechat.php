<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Zopimlivechat
 * @author     info@magepsycho.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Zopimlivechat_Block_Zopimlivechat extends Mage_Core_Block_Template
{
	protected function _toHtml(){
		$helper = Mage::helper('zopimlivechat');
		if($helper->isActive()){
			return $helper->getWidgetCode();
		}
		return;
	}
}