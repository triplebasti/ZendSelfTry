<?php
namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {   $this->flashMessenger()->addMessage('Der Datensatz wurde gelöscht');
   		 $flashMessenger = $this->flashMessenger();
   		 return new ViewModel(
   		 		array(
   		 				'greeting' => 'hello, world!',
   		 				'controllers' => array(
   		 						'invokables' => array(
   		 								'Helloworld\Controller\Index'=> 'Helloworld\Controller\IndexController',
   		 
   		 						)
   		 				),
   		 			'invokables'=> array(
   		 					'currentDate'
   		 						=> 'Helloworld\Controller\Plugin\CurrentDate'
   		 				),
   		 				
   		 			//'date' => $this->CurrentDate(),
   		 				
   		 				)
   		 		
   		 );

    }

}
