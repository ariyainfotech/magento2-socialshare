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
 * Class FloatPosition
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class FloatPosition extends OptionArray
{
    const LEFT  = 'left';
    const RIGHT = 'right';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::LEFT  => __('Left'),
            self::RIGHT => __('Right'),
        ];
    }
}
