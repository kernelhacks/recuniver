<?php
function __controllerAutoload($className){
  include 'controllers/'.$className.'.php';
}

spl_autoload_register('__controllerAutoload');
 ?>
