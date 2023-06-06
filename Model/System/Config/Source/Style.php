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
 * Class Style
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class Style extends OptionArray
{
    const HORIZONTAL = 'horizontal';
    const VERTICAL   = 'vertical';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::HORIZONTAL => __('Horizontal'),
            self::VERTICAL   => __('Vertical'),
        ];
    }
}
