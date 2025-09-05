<?php
// Clase Deportes
class deportesController {
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
