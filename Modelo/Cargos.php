<?php

class Empleados {

    private $idCargo;
    private $tipoCargo;
    private $descripcionCargo;
    private $conexion;

    function __construct() {
        $this->conexion = new Conexiones();
    }

    public function listarCargos() {
        $sql = "SELECT idcargos, tipoCargo, descripcion FROM cargos;";
        return $this->conexion->consulta($sql);
    }

    public function listarIdCargo() {
        $sql = "SELECT idcargos, tipoCargo, descripcion "
                . "FROM cargos "
                . "WHERE idcargos={$this->getIdCargo()};";
        return $this->conexion->consulta($sql);
    }

    public function listarTipoCargo() {
        $sql = "SELECT idcargos, tipoCargo, descripcion "
                . "FROM cargos "
                . "WHERE tipoCargo LIKE '%{$this->getTipoCargo()}%';";
        return $this->conexion->consulta($sql);
    }

    public function insertarCargos() {
        $sql = "INSERT INTO cargos "
                . "VALUES (null, "
                . "'{$this->getTipoCargo()}', "
                . "'{$this->getDescripcionCargo()}');";

        return $this->conexion->consultaSimple($sql);
    }

    public function editarCargos() {
        $sql = "UPDATE cargos "
                . "SET tipoCargo='{$this->getTipoCargo()}', "
                . "descripcion='{$this->getDescripcionCargo()}' "
                . "WHERE idcargos={$this->getIdCargo()};";

        return $this->conexion->consultaSimple($sql);
    }

    public function eliminarCargos() {
        $sql = "DELETE FROM cargos WHERE idcargos={$this->getIdCargo()}";
        return $this->conexion->consultaSimple($sql);
    }

    public function getIdCargo() {
        return $this->idCargo;
    }

    public function getTipoCargo() {
        return $this->tipoCargo;
    }

    public function getDescripcionCargo() {
        return $this->descripcionCargo;
    }

    public function setIdCargo($idCargo) {
        $this->idCargo = $idCargo;
    }

    public function setTipoCargo($tipoCargo) {
        $this->tipoCargo = $tipoCargo;
    }

    public function setDescripcionCargo($descripcionCargo) {
        $this->descripcionCargo = $descripcionCargo;
    }

}
