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
        $oM = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $post = $this->getRequest()->getPost();
        switch ($post['data']['Option']) {
            case('1'):
                $user = new \Application\Entity\User();
                $user->setFullName($post['data']['PlayerName']);
                $oM->persist($user);
                $oM->flush();
                break;
            case('2'):
                $allUser = $oM->getRepository('Application\Entity\User')->findAll();
                foreach($allUser AS $user){
                    $oM->remove($user);
                }
                $oM->flush();
                ; break;
            case('3'):
                foreach ($post['data']['PlayerArray'] AS $key => $value){
                    $findUser = $oM->getRepository('Application\Entity\User')->findOneBy(array('fullName'=>$value));
                    $findUser->setstartNumber($key);
                    $oM->flush();
            }
                ; break;
            case('4'):
                if (empty($post['data']['NewPlayer'])===FALSE) {
                    $findUser = $oM->getRepository('Application\Entity\User')->findOneBy(array('fullName'=>$post['data']['OldPlayer']));
                    $findUser->setFullName($post['data']['NewPlayer']);
                    $oM->flush();
                } else {
                    $findUser = $oM->getRepository('Application\Entity\User')->findOneBy(array('fullName'=>$post['data']['OldPlayer']));

                    $oM->remove($findUser);
                    $oM->flush();
                }
                break;
        }
        return new JsonModel($returnArray);
    }

}
