<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Zopimlivechat
 * @author     info@magepsycho.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Zopimlivechat_Block_System_Config_Zopimlivechat_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<div style="border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 10px 10px 10px;">
    <h4>About Zopim Live Chat</h4>
    <p>Zopim is an online chat software trusted and loved by enterprises and small business worldwide.<br />
    For more details visit the links: <a href="http://www.zopim.com/" target="_blank">Homepage</a> | <a href="http://dashboard.zopim.com/" target="_blank">Dashboard</a><br />
    </p>
    </div>
';

        return $html;
    }
}
