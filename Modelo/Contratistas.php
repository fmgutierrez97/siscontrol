<?php

class Empleados {

    private $idContratista;
    private $nitContratista;
    private $descripcionContratista;
    private $nombreContratista;
    private $conexion;

    function __construct() {
        $this->conexion = new Conexiones();
    }

    public function listarContratistas() {
        $sql = "SELECT idcontratistas, nitContratista, descripcion, nombreContratista "
                . "FROM contratistas;";
        return $this->conexion->consulta($sql);
    }

    public function listarIdContratista() {
        $sql = "SELECT idcontratistas, nitContratista, descripcion, nombreContratista "
                . "FROM contratistas WHERE idcontratistas={$this->getIdContratista()};";
        return $this->conexion->consulta($sql);
    }

    public function listarNitContratista() {
        $sql = "SELECT idcontratistas, nitContratista, descripcion, nombreContratista "
                . "FROM contratistas WHERE nitContratistas='{$this->getNitContratista()}';";
        return $this->conexion->consulta($sql);
    }

    public function listarNombreContratista() {
        $sql = "SELECT idcontratistas, nitContratista, descripcion, nombreContratista "
                . "FROM contratistas WHERE nombreContratista LIKE '%{$this->getNombreContratista()}%';";
        return $this->conexion->consulta($sql);
    }

    public function insertarContratista() {
        $sql = "INSERT INTO contratistas "
                . "VALUES (null, "
                . "'{$this->getNitContratista()}', "
                . "'{$this->getDescripcionContratista()}', "
                . "'{$this->getNombreContratista()}');";

        return $this->conexion->consultaSimple($sql);
    }

    public function editarContratista() {
        $sql = "UPDATE contratistas "
                . "SET nitContratista='{$this->getNitContratista()}', "
                . "descripcion='{$this->getDescripcionContratista()}', "
                . "nombreContratista='{$this->getNombreContratista()}' "
                . "WHERE idcontratistas={$this->getIdContratista()};";

        return $this->conexion->consultaSimple($sql);
    }

    public function eliminarContratista() {
        $sql = "DELETE FROM contratistas "
                . "WHERE idcontratistas={$this->getIdContratista()};";
        return $this->conexion->consultaSimple($sql);
    }

    public function getIdContratista() {
        return $this->idContratista;
    }

    public function getNitContratista() {
        return $this->nitContratista;
    }

    public function getDescripcionContratista() {
        return $this->descripcionContratista;
    }

    public function getNombreContratista() {
        return $this->nombreContratista;
    }

    public function setIdContratista($idContratista) {
        $this->idContratista = $idContratista;
    }

    public function setNitContratista($nitContratista) {
        $this->nitContratista = $nitContratista;
    }

    public function setDescripcionContratista($descripcionContratista) {
        $this->descripcionContratista = $descripcionContratista;
    }

    public function setNombreContratista($nombreContratista) {
        $this->nombreContratista = $nombreContratista;
    }

}
