<?php

class Empleados {

    private $idSucursal;
    private $nombreSucursal;
    private $idCiudad;
    private $nombreCiudad;
    private $conexion;

    function __construct() {
        $this->conexion = new Conexiones();
    }

    public function listarSucursales() {
        $sql = "SELECT idSucursal, nombreSucursal, ciudades_idCiudad FROM sucursales;";
        return $this->conexion->consulta($sql);
    }

    public function listarIdSucursal() {
        $sql = "SELECT idSucursal, nombreSucursal, ciudades_idCiudad "
                . "FROM sucursales WHERE idSucursal={$this->getIdSucursal()};";
        return $this->conexion->consulta($sql);
    }

    public function listarNombreSucursal() {
        $sql = "SELECT idSucursal, nombreSucursal, ciudades_idCiudad "
                . "FROM sucursales WHERE nombreSucursal={$this->getNombreSucursal()};";
        return $this->conexion->consulta($sql);
    }

    public function insertarSucursal() {
        $sql = "INSERT INTO sucursales "
                . "VALUES (null, "
                . "'{$this->getNombreSucursal()}', "
                . "{$this->getIdCiudad()});";

        return $this->conexion->consultaSimple($sql);
    }

    public function editarSucursal() {
        $sql = "UPDATE sucursales "
                . "SET nombreSucursal='{$this->getNombreSucursal()}', "
                . "ciudades_idCiudad={$this->getIdCiudad()} "
                . "WHERE idSucursal={$this->getIdSucursal()};";

        return $this->conexion->consultaSimple($sql);
    }

    public function eliminarSucursal() {
        $sql = "DELETE FROM sucursales WHERE idSucursal={$this->getIdSucursal()};";
        return $this->conexion->consultaSimple($sql);
    }

    public function getIdSucursal() {
        return $this->idSucursal;
    }

    public function getNombreSucursal() {
        return $this->nombreSucursal;
    }

    public function getIdCiudad() {
        return $this->idCiudad;
    }

    public function getNombreCiudad() {
        return $this->nombreCiudad;
    }

    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }

    public function setNombreSucursal($nombreSucursal) {
        $this->nombreSucursal = $nombreSucursal;
    }

    public function setIdCiudad($idCiudad) {
        $this->idCiudad = $idCiudad;
    }

    public function setNombreCiudad($nombreCiudad) {
        $this->nombreCiudad = $nombreCiudad;
    }

}
