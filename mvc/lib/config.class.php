<?php 
class Config{
    public static $settings = array();
    public static function get($key){
	return isset(self::$settings[$key]) ? self::$settings[$key] : NULL;
	
    }
    public static function set($key, $value= null) {
	self::$settings[$key]=$value;
    }
}



?>