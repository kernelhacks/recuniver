<?php
/**
 *
 */
require 'config/database.php';
require_once 'models/estudianteModel.php';
class estudianteController
{  
  function dashboard()
  {
    require 'views/estudiante/dashboard.view.php';
  }
  
  function profile()
  {
    require 'views/estudiante/profile.view.php';
  }
  
  function table()
  {
    require 'views/estudiante/table.view.php';
  }
    
  function login()
  {
      require 'views/estudiante/login.view.php';
  }
  
  function registro()
  {
      require 'views/estudiante/register.view.php';
      
      if (!empty($_POST)) 
      {
        $database = new Database();
        $db = $database->getConnection();
        
        $estudiante = new estudianteModel($db);      
        $estudiante->setNombre($_POST['nombre']);
        $estudiante->setApellido($_POST['apellido']);
        $estudiante->setEmail($_POST['email']);
        $estudiante->setUsername($_POST['username']);
        $estudiante->setPassword($_POST['password']);
        $estudiante->setContrato($_POST['terms']);
        
        if($estudiante->save())
        {
            return true;
        }else{
            return false;
        }
      }
      
      
  }
}

  ?>
