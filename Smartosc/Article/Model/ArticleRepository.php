<?php

namespace Smartosc\Article\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Smartosc\Article\Api\ArticleRepositoryInterface;
use Smartosc\Article\Api\Data\ArticleInterface;
use Smartosc\Article\Api\Data\ArticleSearchResultInterfaceFactory;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory as ArticleCollectionFactory;
use Smartosc\Article\Model\ResourceModel\DataArticle as ArticleResurce;

class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @var articleResource
     */
    private $articleResource;
    /**
     * @var ArticleFactory
     */
    private $articleFactory;

    /**
     * @var ArticleCollectionFactory
     */
    private $articleCollectionFactory;

    /**
     * @var ArticleSearchResultInterfaceFactory
     */
    private $searchResultFactory;

    public function __construct(
        ArticleFactory $articleFactory,
        ArticleResurce $articleResource,
        ArticleCollectionFactory $articleCollectionFactory,
        ArticleSearchResultInterfaceFactory $articleSearchResultInterfaceFactory
    ) {
        $this->articleFactory = $articleFactory;
        $this->articleResource = $articleResource;
        $this->articleCollectionFactory = $articleCollectionFactory;
        $this->searchResultFactory = $articleSearchResultInterfaceFactory;
    }

    public function getById($id)
    {
        $article = $this->articleFactory->create();
        $this->articleResource->load($article, $id);
        if (! $article->getId()) {
            throw new NoSuchEntityException(__('Unable to find $article with ID "%1"', $id));
        }
        return $article;
    }

    public function save(ArticleInterface $article)
    {
        $article->articleResource()->save($article);
        return $article;
    }

    public function delete(ArticleInterface $article)
    {
        $article->getResource()->delete($article);
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();

        $this->addFiltersToCollection($searchCriteria, $collection);
        $this->addSortOrdersToCollection($searchCriteria, $collection);
        $this->addPagingToCollection($searchCriteria, $collection);

        $collection->load();

        return $this->buildSearchResult($searchCriteria, $collection);
    }
}
