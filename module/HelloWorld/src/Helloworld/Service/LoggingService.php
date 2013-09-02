<?php
 namespace Helloworld\Service;
 
 class MyEvent
 {
 	private $myObject;
 	
 	public function setMyObject($myObject)
 	{
 		$this->myObject = $myObject;
 	}
 	public function getMyObject($myObject)
 	{
 		return $this->myObject;
 	}
 	
 }