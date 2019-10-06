<?php
namespace Smartosc\Article\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DataArticle extends AbstractDb
{
    public function _construct()
    {
        $this->_init("sm_article", "article_id");
    }
}
