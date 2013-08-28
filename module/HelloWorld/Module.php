<?php
namespace Helloworld;

    class Module
    {
//     	public function init(ModuleManager $moduleManager)
//     	{
//     		$moduleManager
//     			->getEventManager()
//     			->attach(
// 						ModuleEvent::EVENT_LOAD_MODULES_POST,
//     					array($this, 'onModulesPost')
//     		);
//     		$sharedEvents = $moduleManager
//     			->getEventManager()->getShared();
//     		$sharedEvents->attach(
//     					'application',
//     					'route',
//     				function($e){
//     			die("Event '{$e->getName()}'wurde ausgeloest!");
//     		}
//     		);
    		
//     	}
    	
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
