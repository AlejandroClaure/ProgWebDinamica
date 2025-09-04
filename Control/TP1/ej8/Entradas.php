<?php
// Clase Entradas
class Entradas {
    private $edad;
    private $estudiante;

    public function __construct($edad, $estudiante) {
        $this->edad = $edad;
        $this->estudiante = $estudiante;
    }

    public function calcularPrecio() {
        if ($this->estudiante && $this->edad < 12) {
            $precio = 160;
        } elseif ($this->estudiante && $this->edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }

        return "El precio de la entrada es: \${$precio}";
    }
}
