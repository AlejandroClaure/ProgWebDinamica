<?php
// Clase Persona: representa una persona y permite validar si es mayor de edad
class Persona {
    // Atributos privados
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    // Constructor: inicializa la persona con sus datos
    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    // Método que devuelve una presentación básica
    public function presentarse() {
        return "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años y vivo en {$this->direccion}.";
    }

    // Método que indica si la persona es mayor o menor de edad
    public function verificarEdad() {
        if ($this->edad >= 18) {
            return "Eres mayor de edad.";
        } else {
            return "Eres menor de edad.";
        }
    }
}
