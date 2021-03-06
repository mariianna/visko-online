<?php

/**
 * Gets global configuration values.
 * 
 * TODO fix ineffecient implementation?
 * @author awknaust
 *
 */
class ConfigurationManager{

	private static $configLocation = '../config/config.ini';
	
	
	public function getBackendLocation(){
		return $this->getConfigValue("viskoBackendURL");	
	}
	
	public function getMysqlUser(){
		return $this->getConfigValue("mysqlUser");
	}

	public function getMysqlPassword(){
		return $this->getConfigValue("mysqlPassword");
	}

	public function getMysqlDatabase(){
		return $this->getConfigValue("mysqlDatabase");
	}

	public function getMysqlHost(){
		return $this->getConfigValue("mysqlHost");
	}

	private function getConfigValue($key){
		$config_arr = parse_ini_file(
				__DIR__ . '/'. ConfigurationManager::$configLocation, 
				false
		);
		
		return $config_arr[$key];
	}
	
}
