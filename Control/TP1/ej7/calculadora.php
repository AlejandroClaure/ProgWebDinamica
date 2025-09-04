<?php
// Clase Calculadora
class Calculadora {
    private $n1;
    private $n2;
    private $operacion;

    public function __construct($n1, $n2, $operacion) {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->operacion = $operacion;
    }

    public function calcular() {
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

        return "{$this->n1} {$this->operacion} {$this->n2} = {$res}";
    }
}
