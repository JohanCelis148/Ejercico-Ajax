<?php

use LDAP\Result;

include '../conexion/conexion.php';
class registrosM{

    private $id;
    private $nombreCompleto;

    function __construct(){}


    // ID
    public function setId ($id){$this->id =$id;} 
    public function getId(){return $this->id;}

    //nombre
    public function setNombreCompleto ($nombreCompleto){$this->nombreCompleto =$nombreCompleto;} 
    public function getNombreCompleto(){return $this->nombreCompleto;}
    


    public function crear(){
        try{
            $conexion = new conexion();
            $sql="INSERT INTO registro (nombre) VALUES ('$this->nombreCompleto');";
            $conexion->ejecutar($sql);
            echo "se agregaron bien";
        }catch(Exception $e){
            echo "Ocurrio un error al crear";
        }
       

    }

    public function modificar(){
        $conexion = new conexion();
        $sql="UPDATE registro SET nombre = '$this->nombreCompleto' WHERE id = $this->id;";
        $conexion->ejecutar($sql);
        echo "se modificaron bien";
    }
    
    public function eliminar(){
        $conexion = new conexion();
        $sql="DELETE FROM registro WHERE id = ".$this->id.";";
         $conexion->ejecutar($sql);
        echo "se eliminarón bien";
  
    }

    public function consultar(){
        $conexion = new conexion();
        $sql = "SELECT * FROM registro WHERE id = ".$this->id.";";
        $conexion->ejecutarConsulta($sql);
        $this->nombreCompleto = $conexion->getValores()['nombre'];
        $this->correo = $conexion->getValores()['correo'];
        $this->celular = $conexion->getValores()['celular'];
        $this->fechaNacimiento = $conexion->getValores()['fechaNacimiento'];
        $this->genero = $conexion->getValores()['genero'];
        $this->ciudad = $conexion->getValores()['ciudad'];
        $this->direccion = $conexion->getValores()['direccion'];
      
    }

    function __destruct(){}

    

}
