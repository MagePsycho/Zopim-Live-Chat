<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Zopimlivechat
 * @author     info@magepsycho.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Zopimlivechat_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getConfig($field, $section = 'option', $default = null){
        $value = Mage::getStoreConfig('zopimlivechat/' .$section .  '/' . $field);
        if(!isset($value) or trim($value) == ''){
            return $default;
        }else{
            return $value;
        }
    }

    public function log($data){
		if(!$this->getConfig('enable_log')){
			return;
		}
        if(is_array($data) || is_object($data)){
            $data = print_r($data, true);
        }
        Mage::log($data, null, 'zopimlivechat.log');
    }

	public function isActive(){
		return $this->getConfig('active');
	}

	public function getWidgetcode(){
		return $this->getConfig('widget_code');
	}
}