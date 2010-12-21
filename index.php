<?php
require_once('../Bootstrap.php');
require_once '../../library/sfDI/sfServiceContainerAutoloader.php';
require_once('PersonClass.php');

sfServiceContainerAutoloader::register();

// To describe services with PHP, you can use the sfServiceContainerBuilder class
$container = new sfServiceContainerBuilder();


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


$person = $container->person;

$personTwo = new PersonClass(array(
		'name' => 'Todd',
		'gender' => 'M',
		'age'	=> 25));


echo '<pre>';
	var_dump($person);
echo '</pre>';
echo '<hr>';
echo '<pre>';
	var_dump($personTwo);;
echo '</pre>';









/*
$sc = new sfServiceContainerBuilder(array(
	'name' => 'Cody',
	'gender' => 'M',
	'age'	=> 25
));


$sc->register('dispatcher','sfEventDispatcher')->addArgument('%person.options%');

$sc->
	register('person', '%person.class%')->
	addArgument(new sfServiceReference('dispatcher'))->
	addArgument(new sfServiceReference('person'))->
	addArgument(array('default_culture'=>'%person.default_culture%'));
	
$person = $sc->person;
*/


//$sc = new sfServiceContainerBuilder();

/**
 * The creation of a service is done by calling the register() method, which takes the 
 * service name and the class name, and returns a sfServiceDefinition instance.
 * 
 * @param id
 * @param classname
 * 
 * addArgument(): Adds an argument to pass to the service constructor.
 */

/*
$sc->
	register('persons','PersonClass')->
	addArgument(array(
		'name' => '%persons.name%',
		'gender' => '%persons.gender%',
		'age'	=> '%persons.age%'
	));

	
$sc->
	register('persons','%persons.class%')->
	addMethodCall('setDefaultTransport',array(new sfServiceReference('person.transport')));
		
$sc->addParameters(array(
	'persons.name' => 'Cody',
	'persons.gender' => 'M',
	'persons.age' => 25
));

$persons = $sc->persons;
*/