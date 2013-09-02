<?php
namespace Helloworld;

    class Module
    {   public function getViewHelperConfig()
 {
 return array(
 'invokables' => array(
 'displayCurrentDate'
 => 'Helloworld\View\Helper\DisplayCurrentDate'
 )
 );
 }
    	
    	public function getControllerPluginConfig()
    	{
    		return array(
    			'invokables'=> array(
    				'currentDate'
    					=> 'Helloworld\Controller\Plugin\CurrentDate'
    			)
    		);
    		
    	}
    	
    	public function getServiceConfig(){
    		
    		return array(
    			'factories' => array(
    				'greetingService'
    					=> 'Helloworld\Service\GreetingServiceFactory'
    					
    							),
    				'invokables' => array(
    					'loggingService'
    							=> 'Helloworld\Service\LoggingService'
    							)
    			);
    		
    	}
        public function getConfig()
        {
            return include __DIR__ . '/config/module.config.php';
        }


       public function getAutoloaderConfig()
       {
           return array(
               'Zend\Loader\ClassMapAutoloader' => array(
                       __DIR__ . '/autoload_classmap.php'
                   ),
               'Zend\Loader\StandardAutoloader' => array(
                       'namespaces' => array(
                           __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,

                   ),
               ),
            );
       }


  }
