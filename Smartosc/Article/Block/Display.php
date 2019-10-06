<?php
namespace Smartosc\Article\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;
use Smartosc\Article\Model\ArticleRepository;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;
use Smartosc\Article\Helper\Data;

class Display extends Template
{
    protected $_articleCollectionFactory;

    protected $_articleReponsitory;

    protected $_scopeConfig;

    protected $request;

    protected $_dataHelper;

    public function __construct(
        Context $context,
        CollectionFactory $articleCollectionFactory,
        ArticleRepository $articleRepository,
        ScopeConfigInterface $scopeConfig,
        Http $request,
        Data $dataHelper
    ) {
        $this->_articleCollectionFactory = $articleCollectionFactory;
        $this->_articleReponsitory = $articleRepository;
        $this->_scopeConfig = $scopeConfig;
        $this->request = $request;
        $this->_dataHelper = $dataHelper;
        return parent::__construct($context);
    }

    public function getArticle()
    {
        $curentPage = $this->request->getParam('page') ? $this->request->getParam('page') : 1;
        $limit = $this->_scopeConfig->getValue('smartosc_configuration/configuration/limit', ScopeInterface::SCOPE_STORE);
        $collection = $this->_articleCollectionFactory->create();
        $totalItems =  $collection->count();
        $collection->setPageSize($limit);
        $collection->setCurPage($curentPage);
        $totalPage = ceil($totalItems/$limit);
        $data = [
            'item' => $collection->getData(),
            'page' => [
                'CurPage' => $curentPage,
                'totalPage' => $totalPage
            ]
        ];
        return $data;
    }
    public function canShowBlock()
    {
        return $this->_dataHelper->isModuleEnabled();
    }
}
