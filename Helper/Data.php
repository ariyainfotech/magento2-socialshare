<?php
/**
 * AriyaInfoTech
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the AriyaInfoTech.com license 
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    AriyaInfoTech
 * @package     AriyaInfoTech_SocialShare
 * @copyright   Copyright (c) AriyaInfoTech (https://www.ariyainfotech.com/)
 */

namespace AriyaInfoTech\SocialShare\Helper;

use AriyaInfoTech\SocialShare\Model\System\Config\Source\BackgroundColor;
use AriyaInfoTech\SocialShare\Model\System\Config\Source\ButtonColor;
use AriyaInfoTech\SocialShare\Model\System\Config\Source\IconColor;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package AriyaInfoTech\SocialShare\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const CONFIG_MODULE_PATH = 'mpsocialshare/';
    const CONFIG_FLOAT       = 'float/';
    const CONFIG_INLINE      = 'inline/';
    const CONFIG_MORE        = 'add_more_share/';

    /**
     * @var ScopeConfigInterface
     */

    protected $_scopeConfig;
     /**
     * SocialShare constructor.
     *
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * @return mixed
     */

    public function isEnabled()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/enabled',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getIconColor()
    {
        $selectColor = $this->_scopeConfig->getValue('mpsocialshare/general/icon_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if ($selectColor === IconColor::CUSTOM) {
            return $this->_scopeConfig->getValue('mpsocialshare/general/custom_icon_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        }

        return $selectColor;
    }

    /**
     * @return mixed
     */
    public function getButtonColor()
    {
        $selectColor = $this->_scopeConfig->getValue('mpsocialshare/general/button_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if ($selectColor === ButtonColor::CUSTOM) {
            return $this->_scopeConfig->getValue('mpsocialshare/general/custom_button_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        }

        return $selectColor;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor()
    {
        $selectColor = $this->_scopeConfig->getValue('mpsocialshare/general/background_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if ($selectColor === BackgroundColor::CUSTOM) {
            return $this->_scopeConfig->getValue('mpsocialshare/general/custom_background_color',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        }

        return $selectColor;
    }

    /**
     * @return mixed
     */
    public function getBorderRadius()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/border_radius',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function isShareCounter()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/share_counter',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function isThankYouPopup()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/thank_you',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @param $serviceCode
     * @return array|mixed
     */
    public function isServiceEnable($serviceCode)
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/'.$serviceCode.'/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @param $serviceCode
     * @return array|mixed
     */
    public function getServiceImage($serviceCode)
    {
        return $this->_scopeConfig->getValue('mpsocialshare/general/'.$serviceCode.'/image', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function isAddMoreShare()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/add_more_share/enabled',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getDisplayMenu()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/add_more_share/full_menu/display_menu',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getNumberOfServices()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/add_more_share/number_service',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function isFullMenuOnClick()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/add_more_share/number_service/full_menu',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @param $serviceCode
     * @return null |null
     */
    public function getDisableService($serviceCode)
    {
        if (!$this->isServiceEnable($serviceCode)) {
            return $serviceCode;
        }
        return null;
    }

    /**
     * @return array|mixed
     */
    public function getFloatApplyPages()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/apply_for',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatSelectPages()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/select_page',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatCmsPages()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/cms_page',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatStyle()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/style',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatPosition()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/position',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatMarginTop()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/margin_top',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatMarginBottom()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/margin_bottom',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getFloatButtonSize()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/float/button_size',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getInlineApplyPages()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/inline/apply_for',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getInlinePosition()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/inline/position',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function isShowUnderCart()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/inline/show_under_cart',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return array|mixed
     */
    public function getInlineButtonSize()
    {
        return $this->_scopeConfig->getValue('mpsocialshare/inline/button_size',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
}
