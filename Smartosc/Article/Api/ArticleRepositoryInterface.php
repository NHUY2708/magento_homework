<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Smartosc\Article\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Smartosc\Article\Api\Data\ArticleInterface;

/**
 * CMS article CRUD interface.
 *
 *
 * @api
 * @since 100.0.2
 */
interface ArticleRepositoryInterface
{

    /**
     * Save block.
     *
     * @param ArticleInterface $article
     * @return ArticleInterface
     * @throws LocalizedException
     */
    public function save(ArticleInterface $article);

    /**
     * Retrieve article.
     *
     * @param int $articleId
     * @return ArticleInterface
     * @throws LocalizedException
     */
    public function getById($articleId);

    /**
     * @param ArticleInterface $article
     * @return void
     */
    public function delete(ArticleInterface $article);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return ArticleSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
