<?php
namespace Smartosc\Article\Controller\Index;

class Login extends \Magento\Framework\App\Action\Action
{
    protected $title;

    public function execute()
    {
        echo $this->setTitle('Hello');
        echo $this->getTitle();
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

