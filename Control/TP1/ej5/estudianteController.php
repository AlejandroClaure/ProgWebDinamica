<?php
// Clase Estudiante
class estudianteController {
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
        $msj="";
        switch ($this->estudios) {
            case 1: $msj= "Sin estudios";
            case 2: $msj= "Primarios";
            case 3: $msj= "Secundarios";
            default: $msj= "Desconocido";
        }
        return $msj;
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
