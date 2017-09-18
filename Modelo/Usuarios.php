<?php

class Usuarios {

    private $idUsuario;
    private $inicioSesion;
    private $contrasenia;
    private $idRol;
    private $conexion;

    function __construct() {
        $this->conexion = new Conexiones();
    }

    public function listarUsuarios() {
        $sql = "SELECT idUsuario, "
                . "idUsuario, "
                . "inicioSesion, "
                . "contrasena, "
                . "nombreRol, "
                . "FROM usuarios "
                . "INNER JOIN roles ON roles_idRol = idRol";
        return $this->conexion->consulta($sql);
    }

    public function insertarUsuario() {
        $sql = "INSERT INTO usuarios("
                . "idUsuario, "
                . "inicioSesion, "
                . "contrasena, "
                . "roles_idRol,) "
                . "VALUE(NULL, "
                . "{$this->getInicioSesion()}"
                . "'".md5($this->setContrasenia())."', "
                . "{$this->getIdRol()});";

        return $this->conexion->consultaSimple($sql);
    }

    public function editarUsuario() {
        $sql = "UPDATE usuarios "
                . "SET roles_idRol = {$this->getIdRol()}, "
                . "inicioSesion = {$this->getInicioSesion()}, "
                . "contrasena = {$this->getContrasenia()} "
                . "WHERE idUsuario = {$this->getIdUsuario()};";
        return $this->conexion->consultaSimple($sql);
    }

    public function verificarContrasenia (){
        $sql = "select * from usuarios where contrasena = '".md5($this->getContrasenia())."'
        and idUsuario = '{$this->getIdUsuario()}' ";
        return $this->conexion->consulta($sql);
    }
    
    public function editarContrasenia() {
        $sql = "UPDATE usuarios "
                . "SET contrasena = '".md5($this->getContrasenia())."' "
                . "WHERE idUsuario = {$this->getIdUsuario()};";
        return $this->conexion->consultaSimple($sql);
    }

    public function eliminarUsuario() {
        $sql = "DELETE FROM usuarios WHERE idUsuario = {$this->getIdUsuario()}";

        return $this->conexion->consultaSimple($sql);
    }

    public function verificarUsuario() {
        $sql = "SELECT idUsuario, "
                . "idUsuario, "
                . "inicioSesion, "
                . "contrasena, "
                . "nombreRol "
                . "FROM usuarios "
                . "INNER JOIN roles ON roles_idRol = idRol "
                . "WHERE inicioSesion = '{$this->getInicioSesion()}' "
                . "AND contrasena ='".md5($this->getContrasenia())."';";

        return $this->conexion->consulta($sql);
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getInicioSesion() {
        return $this->inicioSesion;
    }

    function getContrasenia() {
        return $this->contrasenia;
    }

    function getIdRol() {
        return $this->idRol;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setInicioSesion($inicioSesion) {
        $this->inicioSesion = $inicioSesion;
    }

    function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }
}
