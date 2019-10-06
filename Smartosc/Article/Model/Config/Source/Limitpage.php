<?php
namespace Smartosc\Article\Model\Config\Source;

class Limitpage implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            '1'   => '1',
            '3'  => '3',
            '5'  => '5',
            '10' => '10',
            '15' => '15',

        ];
    }
}