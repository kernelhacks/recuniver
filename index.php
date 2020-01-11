<?php
require_once 'autoload.php';
require 'config/parametros.php';

if(isset($_GET['controller']))
{
	$nombre_controlador = $_GET['controller'].'Controller';
}elseif (!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = DEFAULT_CONTROLLER;
}
else{
	echo "La pagina que buscas no existe";
	exit();
}

if(class_exists($nombre_controlador))
{
	$controlador = new $nombre_controlador();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
	{
		$action = $_GET['action'];
		
		if($action == 'registro' || $action == 'save')		
		{
			$controlador->$action();
		}else{
			require 'views/layout/includes/header.php';
			require 'views/layout/navbar.view.php';
			require 'views/layout/sidebar.view.php';
			$controlador->$action();
			require 'views/layout/includes/footer.php';			
		}
	}else{
	    $default =  DEFAULT_ACTION;
	    $controlador-> $default();
	}
}else{
	echo "La pagina que buscas no existe";
}
