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
 * Class BackgroundColor
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class BackgroundColor extends OptionArray
{
    const CUSTOM = 'Custom';
    const NONE   = 'transparent';
    const WHITE  = '#FFFFFF';
    const GRAY   = '#808080';
    const BLACK  = '#000000';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::CUSTOM => __('Custom'),
            self::WHITE  => __('White'),
            self::NONE   => __('None'),
            self::GRAY   => __('Gray'),
            self::BLACK  => __('Black'),
        ];
    }
}
