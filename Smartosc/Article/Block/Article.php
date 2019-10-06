<?php
namespace Smartosc\Article\Block;

use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Smartosc\Article\Helper\Data;
use Smartosc\Article\Model\ArticleRepository;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;

class Article extends Template
{
    protected $_articleCollectionFactory;
    protected $_articleReponsitory;
    protected $request;
    protected $_dataHelper;

    public function __construct(
        Context $context,
        CollectionFactory $articleCollectionFactory,
        ArticleRepository $articleRepository,
        Http $request,
        Data $dataHelper
    ) {
        $this->_articleCollectionFactory = $articleCollectionFactory;
        $this->_articleReponsitory = $articleRepository;
        $this->request = $request;
        $this->_dataHelper = $dataHelper;
        return parent::__construct($context);
    }

    public function getArticleById()
    {
        $article_id = $this->request->getParam('id');
        if (!$article_id) {
            return [];
        }
        $detailArticle = $this->_articleReponsitory->getById($article_id);
        return $detailArticle->getData();
    }

    public function canShowBlock()
    {
        return $this->_dataHelper->isModuleEnabled();
    }
}
