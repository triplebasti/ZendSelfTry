<?php
namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function showAction()
    {
        $returnArray = array();
        $post = $this->getRequest()->getPost();
        if (isset($post['data'])) {
            $returnArray['Information'] = 'Es geht oder so!';
        }
        return new JsonModel($returnArray);
    }

}
