<?php
/**
 * Clase Deportes
 * 
 * Representa una colección de deportes y permite listar su cantidad y nombres.
 */
class Deportes {
    /**
     * @var array Lista de deportes
     */
    private $lista;

    /**
     * Constructor de la clase
     *
     * @param array $deportes Array con los nombres de los deportes
     */
    public function __construct($deportes) {
        $this->lista = $deportes;
    }

    /**
     * Devuelve un mensaje indicando la cantidad de deportes y sus nombres.
     *
     * @return string Mensaje con la lista de deportes
     */
    public function listar() {
        $cantidad = count($this->lista);
        $nombres = implode(", ", $this->lista);

        $resultado = "Practica {$cantidad} deportes:<br>{$nombres}";

        return $resultado;
    }
}
