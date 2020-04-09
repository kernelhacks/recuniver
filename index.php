<?php
/**
 * Este file es un controlador frontar para pocesar todos los request
 * */

require_once 'autoload.php'; //cargar las clases automaticamente
require 'config/parametros.php'; //Cargar las costantes BASE_URL, DEFAULT_CONTROLLER y DEFAULT_ACTION

//Verificar si nos llega un controlador por get
if(isset($_GET['controller']))
{
	$nombre_controlador = $_GET['controller'].'Controller'; //almacena el nombre del controlador solicitado
	
}elseif (!isset($_GET['controller']) && !isset($_GET['action'])){
    
    $nombre_controlador = DEFAULT_CONTROLLER; //Controlador por defecto 
}
else {
	$error = "La pagina que buscas no existe"; //Muestras error si el request no existe
	exit();
}

//Verificar si la clase para ese controlador que nos llego por get existe
if(class_exists($nombre_controlador))
{
	$controlador = new $nombre_controlador(); //Crea un objecto del controlador solicitado
    
	//Verifica si la accion(metodo) requerido existe dentro de la clase del controlador solicitado
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
	{
		$action = $_GET['action']; //Almacena el nombre del metodo en una variable llama action
		$controlador->$action();
	}else{
	    $default =  DEFAULT_ACTION;
	    $controlador-> $default();
	}
}else{
	echo "La pagina que buscas no existe";
}
