<?php

namespace Smartosc\Article\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Smartosc\Article\Model\ArticleRepository;
class Detail extends Action
{

    protected $_pageFactory;
    protected $_articleReponsitory;
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        ArticleRepository $_articleReponsitory
    ) {
        $this->_articleReponsitory = $_articleReponsitory;
        $this->_pageFactory = $pageFactory;
        parent::__construct(
            $context
        );
    }

    public function execute()
    {
//        $detailArticle = $this->_articleReponsitory->getById(1);
//        var_dump($detailArticle->getData());
        return $this->_pageFactory->create();
    }
}
