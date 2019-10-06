<?php
namespace Smartosc\Article\Plugin;

use Magento\Customer\Controller\Account\LoginPost;
use Magento\Backend\Model\Auth;
use Magento\Framework\Message\ManagerInterface as MessageManager;

class PluginCustomerControllerLogin
{
    private $messageManager;
    public function __construct(MessageManager $messageManager)
    {
        $this->messageManager = $messageManager;
    }
//    public function afterExecute(Auth $authModel, $result, $username)
//    {
//     //   $this->messageManager->addNoticeMessage($username);
//    }
    public function afterExecute(
        LoginPost $subject,
        $result
    ) {
        $this->messageManager->addSuccessMessage("Success Login");
        return $result;
    }
}
