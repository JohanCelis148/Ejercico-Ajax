<?php

class conexion{

    private $valores = array();

    //nombre
    public function setValores ($valores){$this->valores =$valores;} 
    public function getValores(){return $this->valores;}

    public function ejecutar($sql){
        $con = mysqli_connect('localhost','root','','registro');
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    public function ejecutarConsulta($sql){
        $con = mysqli_connect('localhost','root','','registro');
         $resultados = mysqli_query($con, $sql);
        while($consulta = mysqli_fetch_array($resultados)){
            $this->valores['nombre'] = $consulta['nombre_completo'];
        }
        mysqli_close($con);
    }


}
?>