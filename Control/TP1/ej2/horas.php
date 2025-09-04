<?php
// Clase Horas: se encarga de calcular la suma de horas semanales
class Horas {
    // Atributo privado que almacenará el array de horas
    private $dias;

    // Constructor: recibe un array asociativo con los días y sus horas
    public function __construct($dias) {
        $this->dias = $dias;
    }

    // Método que suma todas las horas de la semana
    public function calcularTotal() {
        // array_sum suma todos los valores del array
        return array_sum($this->dias);
    }
}
