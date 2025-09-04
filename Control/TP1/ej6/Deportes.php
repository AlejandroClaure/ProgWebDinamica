<?php
// Clase Deportes
class Deportes {
    private $lista;

    public function __construct($deportes) {
        $this->lista = $deportes;
    }

    public function listar() {
        $cantidad = count($this->lista);
        $nombres = implode(", ", $this->lista);
        return "Practica {$cantidad} deportes:<br>{$nombres}";
    }
}
