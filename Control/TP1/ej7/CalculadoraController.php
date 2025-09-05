<?php
/**
 * Clase Calculadora
 * 
 * Permite realizar operaciones básicas entre dos números: suma, resta, multiplicación y división.
 */
class Calculadora {
    /**
     * @var float|int Primer número
     */
    private $n1;

    /**
     * @var float|int Segundo número
     */
    private $n2;

    /**
     * @var string Operación a realizar ('+', '-', '*', '/')
     */
    private $operacion;

    /**
     * Constructor de la clase
     *
     * @param float|int $n1 Primer número
     * @param float|int $n2 Segundo número
     * @param string $operacion Operación a realizar
     */
    public function __construct($n1, $n2, $operacion) {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->operacion = $operacion;
    }

    /**
     * Realiza la operación indicada entre los dos números.
     *
     * @return string Resultado de la operación o mensaje de error
     */
    public function calcular() {
        $res = "";

        switch ($this->operacion) {
            case '+':
                $res = $this->n1 + $this->n2;
                break;
            case '-':
                $res = $this->n1 - $this->n2;
                break;
            case '*':
                $res = $this->n1 * $this->n2;
                break;
            case '/':
                $res = ($this->n2 != 0) ? $this->n1 / $this->n2 : "Error: división por cero";
                break;
            default:
                $res = "Operación no válida";
        }

        $resultadoFinal = "{$this->n1} {$this->operacion} {$this->n2} = {$res}";
        return $resultadoFinal;
    }
}
