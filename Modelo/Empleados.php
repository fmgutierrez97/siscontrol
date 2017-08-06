<?php

class Empleados {

    private $idEmpleado;
    private $identificacion ;
    private $nombres ;
    private $apellidos ;
    private $cargo ;
    private $contratista ;
    private $telefono ;
    private $direccion ;
    private $idCargo ;
    private $idContratista ;
    private $idTipoDocumento ;
    private $idUsuario ;
    private $conexion;

    function __construct() {
        $this->conexion = new Conexiones();
    }

    public function listarEmpleados() {
        $sql = "SELECT idEmpleado, numeroIdentificacion, nombres, " 
                ."apellidos, telefono, direccion, tipoCargo, nombreContratista, "
                ."tipoDocumento, inicioSesion "
                ."FROM empleados "
                ."INNER JOIN cargos ON cargos_idcargos = idcargos "
                ."INNER JOIN contratistas ON contratistas_idcontratistas = idcontratistas "
                ."INNER JOIN tipodocumento ON tipoDocumento_idTipoDocumento = idTipoDocumento "
                ."INNER JOIN usuarios ON usuarios_idUsuario = idUsuario;";
        return $this->conexion->consulta($sql);
    }

    public function insertarEmpleado() {
        $sql = "INSERT INTO empleados "
                . "VALUES(NULL, "
                . "{$this->getIdentificacion()}"
                . "{$this->getNombres()}"
                . "{$this->getApellidos()}"
                . "{$this->getTelefono()}"
                . "{$this->getDireccion()}"
                . "{$this->getCargo()}"
                . "{$this->getContratista()}"
                . "{$this->getIdCargo()}"
                . "{$this->getIdContratista()}"
                . "{$this->getIdTipoDocumento()}"
                . "{$this->getIdUsuario()});";

        return $this->conexion->consultaSimple($sql);
    }

    public function editarEmpleado() {
        $sql = "UPDATE usuarios SET"
                . "numeroIdentificacion={$this->getIdentificacion()}"
                . "nombres={$this->getNombres()}"
                . "apellidos={$this->getApellidos()}"
                . "cargo={$this->getCargo()}"
                . "contratista={$this->getContratista()}"
                . "telefono={$this->getTelefono()}"
                . "direccion={$this->getDireccion()}"
                . "cargos_idcargos={$this->getIdCargo()}"
                . "contratistas_idContratista={$this->getIdContratista()}"
                . "tipoDocumento_idTipoDocumento={$this->getIdTipoDocumento()}"
                . "WHERE usuarios_idUsuario = {$this->getIdUsuario()};";
        return $this->conexion->consultaSimple($sql);
    }

    public function eliminarEmpleado() {
        $sql = "DELETE FROM empleados WHERE idEmpleado = {$this->getIdEmpleado()}";
        return $this->conexion->consultaSimple($sql);
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getIdentificacion() {
        return $this->identificacion;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getContratista() {
        return $this->contratista;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getIdCargo() {
        return $this->idCargo;
    }

    function getIdContratista() {
        return $this->idContratista;
    }

    function getIdTipoDocumento() {
        return $this->idTipoDocumento;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setContratista($contratista) {
        $this->contratista = $contratista;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setIdCargo($idCargo) {
        $this->idCargo = $idCargo;
    }

    function setIdContratista($idContratista) {
        $this->idContratista = $idContratista;
    }

    function setIdTipoDocumento($idTipoDocumento) {
        $this->idTipoDocumento = $idTipoDocumento;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
}
