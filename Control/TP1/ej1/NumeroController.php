<?php
/**
 * Clase Numero
 * 
 * Permite almacenar un número y evaluar si es positivo, negativo o cero.
 */
class Numero {
    /**
     * @var float|int Valor del número a evaluar
     */
    private $valor;

    /**
     * Constructor de la clase
     *
     * @param float|int $valor Número que se quiere evaluar
     */
    public function __construct($valor) {
        $this->valor = $valor;
    }

    /**
     * Evalúa el número y devuelve un mensaje indicando si es positivo, negativo o cero.
     *
     * @return string Mensaje con la evaluación del número
     */
    public function evaluar() {
        $retorno = "";

        if ($this->valor > 0) {
            $retorno = "El número {$this->valor} es POSITIVO";
        } elseif ($this->valor < 0) {
            $retorno = "El número {$this->valor} es NEGATIVO";
        } else {
            $retorno = "El número es CERO";
        }

        return $retorno;
    }
}
