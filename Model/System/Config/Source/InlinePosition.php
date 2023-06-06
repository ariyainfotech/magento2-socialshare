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
 * Class InlinePosition
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class InlinePosition extends OptionArray
{
    const TOP_CONTENT    = 'top_content';
    const BOTTOM_CONTENT = 'bottom_content';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::TOP_CONTENT    => __('Top Content'),
            self::BOTTOM_CONTENT => __('Bottom Content'),
        ];
    }
}
