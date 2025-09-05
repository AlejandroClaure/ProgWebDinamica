<?php
/**
 * Clase Estudiante
 * 
 * Representa un estudiante con nombre, edad, sexo y nivel de estudios.
 */
class Estudiante {
    /**
     * @var string Nombre del estudiante
     */
    private $nombre;

    /**
     * @var int Edad del estudiante
     */
    private $edad;

    /**
     * @var int Nivel de estudios (1: Sin estudios, 2: Primarios, 3: Secundarios)
     */
    private $estudios;

    /**
     * @var string Sexo del estudiante
     */
    private $sexo;

    /**
     * Constructor de la clase
     *
     * @param string $nombre Nombre del estudiante
     * @param int $edad Edad del estudiante
     * @param int $estudios Nivel de estudios
     * @param string $sexo Sexo del estudiante
     */
    public function __construct($nombre, $edad, $estudios, $sexo) {
        $this->nombre   = $nombre;
        $this->edad     = $edad;
        $this->estudios = $estudios;
        $this->sexo     = $sexo;
    }

    /**
     * Traduce el nivel de estudios a texto legible.
     *
     * @return string Nivel de estudios en texto
     */
    private function getEstudiosTexto() {
        $msj = "";

        switch ($this->estudios) {
            case 1:
                $msj = "Sin estudios";
                break;
            case 2:
                $msj = "Primarios";
                break;
            case 3:
                $msj = "Secundarios";
                break;
            default:
                $msj = "Desconocido";
        }

        return $msj;
    }

    /**
     * Presenta los datos del estudiante en formato HTML.
     *
     * @return string Datos del estudiante
     */
    public function presentarDatos() {
        $nivelEstudios = $this->getEstudiosTexto();
        $resultado = "Nombre: {$this->nombre}<br>
                      Edad: {$this->edad}<br>
                      Sexo: {$this->sexo}<br>
                      Nivel de estudios: {$nivelEstudios}";

        return $resultado;
    }
}
