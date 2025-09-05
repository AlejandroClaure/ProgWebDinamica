<?php
/**
 * Clase Entradas
 * 
 * Calcula el precio de una entrada según la edad y si es estudiante.
 */
class Entradas {
    /**
     * @var int Edad de la persona
     */
    private $edad;

    /**
     * @var bool Indica si la persona es estudiante
     */
    private $estudiante;

    /**
     * Constructor de la clase
     *
     * @param int $edad Edad de la persona
     * @param bool $estudiante Verdadero si es estudiante, falso si no
     */
    public function __construct($edad, $estudiante) {
        $this->edad = $edad;
        $this->estudiante = $estudiante;
    }

    /**
     * Calcula el precio de la entrada según la edad y el estado de estudiante.
     *
     * @return string Mensaje con el precio de la entrada
     */
    public function calcularPrecio() {
        $precio = 0;

        if ($this->estudiante && $this->edad < 12) {
            $precio = 160;
        } elseif ($this->estudiante && $this->edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }

        $resultado = "El precio de la entrada es: \${$precio}";
        return $resultado;
    }
}
