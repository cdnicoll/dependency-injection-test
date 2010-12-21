<?php

class PersonClass {
	
	/**
	 * Config options for authentication
	 * @var array
	 */
	protected $_config;
	
	/**
	 * Persons name
	 * @var string
	 */
	protected $_name;
	
	/**
	 * Persons Gender
	 * @var string
	 */
	protected $_gender;
	
	/**
	 * Persons age
	 * @var int
	 */
	protected $_age;
	
	public function __construct(Array $config = array())
	{
		if(isset($config['name'])) {
			$this->_name = $config['name'];
		}

		if(isset($config['gender'])) {
			$this->_gender = $config['gender'];
		}
		
		if(isset($config['age'])) {
			$this->_age = $config['age'];
		}
		
		$this->_config = $config;
	}
	/**
	 * @return the $_config
	 */
	public function getConfig() {
		return $this->_config;
	}

	/**
	 * @return the $_name
	 */
	public function getName() {
		return $this->_name;
	}

	/**
	 * @return the $_gender
	 */
	public function getGender() {
		return $this->_gender;
	}

	/**
	 * @return the $_age
	 */
	public function getAge() {
		return $this->_age;
	}

	/**
	 * @param array $_config
	 */
	public function setConfig($_config) {
		$this->_config = $_config;
	}

	/**
	 * @param string $_name
	 */
	public function setName($_name) {
		$this->_name = $_name;
	}

	/**
	 * @param string $_gender
	 */
	public function setGender($_gender) {
		$this->_gender = $_gender;
	}

	/**
	 * @param int $_age
	 */
	public function setAge($_age) {
		$this->_age = $_age;
	}

	
	
	
}