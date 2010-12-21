<?php

require_once '../../library/sfDI/sfServiceContainerAutoloader.php';

class Container
{
	
	public function __construct() {
		sfServiceContainerAutoloader::register();
		
		// To describe services with PHP, you can use the sfServiceContainerBuilder class
		$container = new sfServiceContainerBuilder();
	}

// Each service is described by a sfServiceDefinition object. Adding a service to a container 
// can be done by using the setServiceDefinition() method. It takes the service name and a 

$container->
	register('person', 'PersonClass')->
	setFile('PersonClass.php')->
	addArgument(array(
		'name' => '%person.name%',
		'gender' => '%person.gender%',
		'age'	=> '%person.age%'
	))->setShared(false);


$container->addParameters(array(
	'person.name' => 'Cody',
	'person.gender' => 'M',
	'person.age' => 25
));
	
}