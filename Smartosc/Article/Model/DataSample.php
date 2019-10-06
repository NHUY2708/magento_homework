<?php
namespace Smartosc\Article\Model;
class DataSample extends \Magento\Framework\Model\AbstractModel{
    public function _construct(){
        $this->_init("Smartosc\Article\Model\ResourceModel\DataExample");
    }
}
