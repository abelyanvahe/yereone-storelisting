<?php
namespace Yereone\StoreListing\Model\Store\Source;

use Magento\Framework\Data\OptionSourceInterface;

class IsActive implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
                ["label" => __("Disabled"), "value" => 0],
                ["label" => __("Enabled"),  "value" => 1 ]
        ];
    }
}