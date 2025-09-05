<?php
/**
 * Clase Persona
 * 
 * Representa una persona con sus datos básicos y permite validar si es mayor de edad.
 */
class Persona {
    /**
     * @var string Nombre de la persona
     */
    private $nombre;

    /**
     * @var string Apellido de la persona
     */
    private $apellido;

    /**
     * @var int Edad de la persona
     */
    private $edad;

    /**
     * @var string Dirección de la persona
     */
    private $direccion;

    /**
     * Constructor de la clase
     *
     * @param string $nombre Nombre de la persona
     * @param string $apellido Apellido de la persona
     * @param int $edad Edad de la persona
     * @param string $direccion Dirección de la persona
     */
    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    /**
     * Devuelve una presentación de la persona en forma de string.
     *
     * @return string Mensaje de presentación
     */
    public function presentarse() {
        $mensaje = "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años y vivo en {$this->direccion}.";
        return $mensaje;
    }

    /**
     * Verifica si la persona es mayor o menor de edad.
     *
     * @return string Mensaje indicando si es mayor o menor de edad
     */
    public function verificarEdad() {
        $retorno = "";

        if ($this->edad >= 18) {
            $retorno = "Eres mayor de edad.";
        } else {
            $retorno = "Eres menor de edad.";
        }

        return $retorno;
    }
}
