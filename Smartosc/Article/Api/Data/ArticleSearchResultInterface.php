<?php
namespace Smartosc\Article\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface ArticleSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return ArticleInterface[]
     */
    public function getItems();

    /**
     * @param ArticleInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}