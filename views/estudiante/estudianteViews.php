<?php

class EstudinateViews 
{
    
    private $data = array();
    
    private $render = FALSE;
    
    public function __construct($template)
    {
        try 
        {
            $file ='views/estudiante/templates/' . strtolower($template) . '.view.php';
            
            if (file_exists($file)) {
                $this->render = $file;
            } else {
                throw new Exception('Template ' . $template . ' not found! <br>' . $file);
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }
    
    public function __destruct()
    {
        extract($this->data);
        include($this->render);
        
    }
}
//require 'views/layout/includes/footer.php';