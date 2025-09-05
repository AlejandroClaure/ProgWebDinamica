<?php
/**
 * Clase Horas
 * 
 * Calcula el total de horas semanales a partir de un array asociativo de días y sus horas.
 */
class Horas {
    /**
     * @var array Array asociativo con los días de la semana y las horas correspondientes
     */
    private $dias;

    /**
     * Constructor de la clase
     *
     * @param array $dias Array asociativo con los días y sus horas. 
     *                   Ejemplo: ['lunes' => 5, 'martes' => 4, ...]
     */
    public function __construct($dias) {
        $this->dias = $dias;
    }

    /**
     * Calcula el total de horas de la semana.
     *
     * @return int Total de horas sumadas
     */
    public function calcularTotal() {
        $total = array_sum($this->dias); // suma todas las horas del array
        return $total;
    }
}
