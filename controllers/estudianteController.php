<?php
/**
 *
 */
require 'config/database.php';
require_once 'models/estudianteModel.php';
require_once 'views/estudiante/estudianteViews.php';

class estudianteController
{  
  function dashboard()
  {      
      //require 'views/estudiante/dashboard.view.php';
      $view = new EstudinateViews('dashboard');
  }
  
  function profile()
  {
      $page = 'profile';
      $view = new EstudinateViews('profile');
//       require 'views/layout/includes/header.php';
//       require 'views/layout/navbar.view.php';
//       require 'views/layout/sidebar.view.php';
//       require 'views/estudiante/profile.view.php';
//       require 'views/layout/includes/footer.php';

  }
  
  function table()
  {
      $page = 'table';
      $view = new EstudinateViews('table');
//       require 'views/layout/includes/header.php';
//       require 'views/layout/navbar.view.php';
//       require 'views/layout/sidebar.view.php';
//       require 'views/estudiante/table.view.php';
//       require 'views/layout/includes/footer.php';
  }
    
  function login()
  {
      require 'views/layout/login.view.php';
  }
  
  function registro()
  {
      require 'views/layout/register.view.php';
      
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
