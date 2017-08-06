<?php 

class EmpleadosControlador {
    
    private $modelo;
    
    public function __construct() {
        $this->modelo = Modelo::cargar('Empleados');
    }
    
    public function listarEmpleados() {
        echo json_encode($this->modelo->listarEmpleados(), true);
    }
}