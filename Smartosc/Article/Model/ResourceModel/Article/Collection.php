<?php
namespace Smartosc\Article\Model\ResourceModel\Article;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Smartosc\Article\Model\Article;
use Smartosc\Article\Model\ResourceModel\DataArticle;

class Collection extends AbstractCollection
{
    /**
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Article::class,
            DataArticle::class
        );
    }
}
