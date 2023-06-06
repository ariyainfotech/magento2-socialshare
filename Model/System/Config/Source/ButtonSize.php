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
 * Class ButtonSize
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class ButtonSize extends OptionArray
{
    const SMALL  = '16x16';
    const MEDIUM = '32x32';
    const LARGE  = '64x64';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::SMALL  => __('16x16'),
            self::MEDIUM => __('32x32'),
            self::LARGE  => __('64x64'),
        ];
    }
}
