<?php 
abstract class Basemodel
{
    private $nombre;
    private $apellido;
    private $bod;
    private $tel;
    private $email;
    private $cedula;
    private $nacionalidad;
    private $direccion;
    private $ciudad;
    private $provincia;
    private $pais;
    private $hobbies;
    private $bio;
    private $username;
    private $password;
    private $contrato;
        
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getBod()
    {
        return $this->bod;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function getHobbies()
    {
        return $this->hobbies;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function getContrato(){
        return $this->contrato;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setBod($bod)
    {
        $this->bod = $bod;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;
    }
}?>