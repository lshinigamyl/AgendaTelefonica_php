<?php

class Conecta {
    private $host='mysql.hostinger.com.ar';
    private $user='u626888219_dc';
    private $password='282ANYFIO';
    private $database_name='u626888219_dc';
    private $conexion;
    private $peticion;
    private $query='SELECT DISTINCT c.nomContacto,
                (SELECT d2.dato FROM dato d2 WHERE d2.idContacto = d.idContacto and d2.numDato= d.numDato and d2.idTipo=1) AS Correo ,
                (SELECT d2.dato FROM dato d2 WHERE d2.idContacto = d.idContacto and d2.numDato= d.numDato and d2.idTipo=2) AS Correo 
                FROM dato d, contacto c Where d.idContacto=c.idContacto';
    public function __construct() {
        
    }
    public function Conectar(){
        return $this->setConexion(mysqli_connect($this->getHost(),$this->getUser(),$this->getPassword()));
    }
    public function VerificarConexion(){
        if(!$this->getConexion()){
             die('No se conecto'.mysqli_error());
        }  else {
            echo 'se conecto en la verificacion<br>';
        }
    }
    public function SeleccionarBD(){
        if(mysqli_select_db($this->conexion,$this->database_name)){
            echo 'seleccionado correctamente<br>';
        }  else {
            die('nose pudo seleccionar'.mysqli_errno());
            
        }
    }
    public function EjecutarSql(){
        $this->setPeticion(mysqli_query($this->getConexion(),$this->getQuery()));
    }
    
//    public function Nfilas($sql){
//        return mysqli_num_rows($sql);
//    }
//    public function NColumnas($sql){
//        return mysqli_num_fields($sql);
//    }
//    public function NomCampo($sql,$i){
//        return mysqli_field_name($sql);
//    }
   

    public function ProcesarConexion(){
        $this->Conectar();
        $this->VerificarConexion();
        $this->SeleccionarBD();
        $this->EjecutarSql();
    }
    public function CerrarConexion(){
        mysqli_close($this->getConexion());
    }

    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDatabase_name() {
        return $this->database_name;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setDatabase_name($database_name) {
        $this->database_name = $database_name;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function getQuery() {
        return $this->query;
    }

    public function getPeticion() {
        return $this->peticion;
    }

    public function setConexion($conexion) {
        $this->conexion = $conexion;
    }

    public function setQuery($query) {
        $this->query = $query;
    }

    public function setPeticion($peticion) {
        $this->peticion = $peticion;
    }

            
    public function __destruct() {
        echo 'Se destruyo el objeto<br>';
    }

}
?>
