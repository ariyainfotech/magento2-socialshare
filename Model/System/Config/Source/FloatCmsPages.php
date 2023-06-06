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

use Magento\Cms\Model\PageFactory;

/**
 * Class FloatCmsPages
 * @package AriyaInfoTech\SocialShare\Model\System\Config\Source
 */
class FloatCmsPages extends OptionArray
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    /**
     * FloatCmsPages constructor.
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
    }

    /**
     * @return array
     */
    public function getOptionHash()
    {
        $pages    = $this->_pageFactory->create()->getCollection();
        $cmsPages = [];

        foreach ($pages as $page) {
            $cmsPages[$page->getId()] = $page->getTitle();
        }

        return $cmsPages;
    }
}
