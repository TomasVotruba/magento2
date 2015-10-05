<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Model\Page\Source;

/**
 * Theme filter source
 */
class ThemeFilter extends Theme
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray() {
        return array_merge([['label' => '', 'value' => '']], parent::toOptionArray());
    }
}