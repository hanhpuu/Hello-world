<?php

class View {

    protected $data;
    protected $path;
    
    protected static function getDefaultViewPath(){
	$router = App::getRouter();
	if (!$router) {
	    return FALSE;
	}
	$controller_dir = $router->getController();
	$template_name = $router->getMethodPrefix().'_'.$router->getAction().'.html';
	return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
    }


    public function __construct($data = array(), $path = null) 
    {
	if (!$path) {
	    
	//	    default path
	    $path = self::getDefaultViewPath();
	}

	if (!file_exists($path)) {
	    throw new Exception('Template file is not found in path '.$path);
	}
	$this->data=$data;
	$this->path=$path;
	
    }
    public function render() 
    {
	$data = $this->data;
	ob_start();

	include ($this->path);
	$content = ob_get_clean();
	
	return $content;
	
    }
	
    }
    