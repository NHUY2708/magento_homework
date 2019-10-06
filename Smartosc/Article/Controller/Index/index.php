<?php
namespace Smartosc\Article\Controller\Index;

use Datetime;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Smartosc\Article\Model\ArticleFactory;

class Index extends Action
{
    protected $_article;
    protected $resultRedirect;
    public function __construct(
        Context $context,
        ArticleFactory $article,
        ResultFactory $result
    ) {
        parent::__construct($context);
        $this->_article = $article;
        $this->resultRedirect = $result;
    }
    public function execute()
    {
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $saveData = null;
        for ($i=1;$i<= 10; $i++) {
            $model = $this->_article->create();
            $model->addData([
                "title" => 'Title' . $i ,
                "content" => 'Content' . $i,
                "image" => 'https://images-na.ssl-images-amazon.com/images/I/810lcy2NBuL._SL1500_.jpg',
                'created_at' => new DateTime(),
                'updated_at' =>  new DateTime()
            ]);
            $saveData = $model->save();
        }


        if ($saveData) {
            $this->messageManager->addSuccess(__('Insert 10 Row Successfully !'));
        }
        return $resultRedirect;
    }
}
