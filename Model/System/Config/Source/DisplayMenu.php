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
 * Class DisplayMenu
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class DisplayMenu extends OptionArray
{
    const ON_HOVER = 'hover';
    const ON_CLICK = 'click';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ON_HOVER => __('Hover'),
            self::ON_CLICK => __('Click'),
        ];
    }
}
