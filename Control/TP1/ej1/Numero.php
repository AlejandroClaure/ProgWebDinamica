<?php
// Definimos una clase llamada Numero que se encargará de evaluar si un número es positivo, negativo o cero
class Numero {
    // Atributo privado que almacena el valor del número
    private $valor;

    // Constructor: recibe el número y lo guarda en la propiedad $valor
    public function __construct($valor) {
        $this->valor = $valor;
    }

    // Método para evaluar el número
    public function evaluar() {
        // Si el número es mayor a 0 → es positivo
        if ($this->valor > 0) {
            return "El número {$this->valor} es POSITIVO";
        // Si el número es menor a 0 → es negativo
        } elseif ($this->valor < 0) {
            return "El número {$this->valor} es NEGATIVO";
        // Si no es mayor ni menor → entonces es 0
        } else {
            return "El número es CERO";
        }
    }
}
