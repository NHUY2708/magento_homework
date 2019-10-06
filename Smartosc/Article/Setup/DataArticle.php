<?php
namespace Smartosc\Article\Model;

use Magento\Framework\Model\AbstractModel;

class DataExample extends AbstractModel
{
    public function _construct()
    {
        $this->_init("Smartosc\Article\Model\ResourceModel\DataArticle");
    }
}
