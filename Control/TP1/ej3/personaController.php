<?php
// Clase Persona: representa una persona con sus datos básicos
class personaController {
    // Atributos privados
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    // Constructor: inicializa los atributos con los datos recibidos
    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    // Método que devuelve una presentación en forma de string
    public function presentarse() {
        return "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años y vivo en {$this->direccion}.";
    }
}
