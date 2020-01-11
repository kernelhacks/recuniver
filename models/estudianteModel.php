<?php
require 'baseModel.php';
class estudianteModel extends Basemodel 
{
    private $conn;
    
    function __construct($dataBase)
    {
        $this->conn = $dataBase;
    }
    
    public function save()
    {
        $sql = "INSERT INTO estudiante (
                    nombre,
                    apellido,
                    email,
                    username,
                    password,
                    contrato) 
                VALUES (
                    '{$this->getNombre()}',
                    '{$this->getApellido()}',
                    '{$this->getEmail()}',
                    '{$this->getUsername()}',
                    '{$this->getPassword()}',
                    '{$this->getContrato()}')";
        
        if($this->conn->query($sql))
        {
            return true;            
        }else{
            return false;
        }
        
        
    }
}
?>