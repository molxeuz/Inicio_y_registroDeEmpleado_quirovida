<?php

error_reporting(E_PARSE | E_ERROR);
require 'conexion.php';

if (isset($_POST['btnIngresar'])){
     if((!isset($_POST['tpd'])) || (!isset($_POST['pass']))){ //toque aqui la validacion
        $error = "<center><font color='red'>Debe Completar el formulario.</font></center>";
        echo $error;
    }
    
    $user = htmlentities($_POST['tpd']);
    $pass = htmlentities($_POST['pass']);
    if (($user == '') || ($pass == '')){
        $error = "<center><font color='red'>Por favor ingrese el usuario y la contraseña.</font></center>";
        echo $error;
    }
}
class DevuelveU extends Conexion{
    public function __construct(){
        parent::__construct();
    }
    
    public function GetUsuarios(){
        /* $user = htmlentities($_POST['user']);
         $pass = htmlentities($_POST['pass']);*/
        $limpiar = new Conexion();
        
        $user =@ $limpiar->sanitize($_POST['tpd']);
        $pass =@ $limpiar->sanitize($_POST['pass']);
        $resultado= $this->conexion_db->query("SELECT * FROM usuariomedico WHERE idUsuarioSalud='$user' AND clave='$pass' ");
        $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
        
        return $usuarios;
    }
    

    public function consultar($sql){
        $busqueda= $this->conexion_db->query($sql);
        
        $resultado=$busqueda->fetch_all(MYSQLI_ASSOC);
        
        return $resultado;  
    }
}

?>