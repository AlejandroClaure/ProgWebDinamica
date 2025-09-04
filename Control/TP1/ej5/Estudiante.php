<?php
// Clase Estudiante
class Estudiante {
    private $nombre;
    private $edad;
    private $estudios;
    private $sexo;

    // Constructor
    public function __construct($nombre, $edad, $estudios, $sexo) {
        $this->nombre   = $nombre;
        $this->edad     = $edad;
        $this->estudios = $estudios;
        $this->sexo     = $sexo;
    }

    // Método para traducir el nivel de estudios
    private function getEstudiosTexto() {
        switch ($this->estudios) {
            case 1: return "Sin estudios";
            case 2: return "Primarios";
            case 3: return "Secundarios";
            default: return "Desconocido";
        }
    }

    // Método que presenta los datos
    public function presentarDatos() {
        $nivelEstudios = $this->getEstudiosTexto();
        return "Nombre: {$this->nombre}<br>
                Edad: {$this->edad}<br>
                Sexo: {$this->sexo}<br>
                Nivel de estudios: {$nivelEstudios}";
    }
}
