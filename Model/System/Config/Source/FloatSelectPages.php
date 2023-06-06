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

namespace AriyaInfoTech\SocialShare\Model\System\Config\Source;

/**
 * Class FloatSelectPages
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class FloatSelectPages extends OptionArray
{
    const CATEGORY_PAGE = 'category_page';
    const PRODUCT_PAGE  = 'product_page';
    const CONTACT_US    = 'contact_us';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::PRODUCT_PAGE  => __('Products Page'),
            self::CATEGORY_PAGE => __('Categories Page'),
            self::CONTACT_US    => __('Contact Us')
        ];
    }
}
