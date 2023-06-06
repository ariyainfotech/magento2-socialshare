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
 * Class FloatApplyFor
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class FloatApplyFor extends OptionArray
{
    const ALL_PAGES    = 'all_pages';
    const SELECT_PAGES = 'select_pages';

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ALL_PAGES    => __('All Pages'),
            self::SELECT_PAGES => __('Select Pages')
        ];
    }
}
