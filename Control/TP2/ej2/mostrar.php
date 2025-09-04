<?php

class Pelicula{
    private $nombre;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccion;
    private $sinopsis;
    
    public function __construct($nombre,$actores,$director,$guion,$produccion,$anio,$nacionalidad,$genero,$duracion,$restriccion,$sinopsis){
        $this->nombre=$nombre;
        $this->actores=$actores;
        $this->director=$director;
        $this->guion=$guion;
        $this->produccion=$produccion;
        $this->anio=$anio;
        $this->nacionalidad=$nacionalidad;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->restriccion=$restriccion;
        $this->sinopsis=$sinopsis;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDirector(){
        return $this->director;
    }
    public function getGuion(){
        return $this->guion;
    }
    public function getProduccion(){
        return $this->produccion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getRestriccion(){
        return $this->restriccion;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }

    public function __toString(){
    return "<h1>La pelicula introducida es:</h1>"."<br>"."<strong>titiulo:</strong>".$this->getNombre().
    "<br>"."<strong>Actores:</strong>".$this->getActores()."<br>"."<strong>Director:</strong>".$this->getDirector().
    "<br>"."<strong>Guion:</strong>".$this->getGuion()."<br>"."<strong>Produccion:</strong>".$this->getProduccion().
    "<br>"."<strong>Años:</strong>".$this->getAnio()."<br>"."<strong>Genero:</strong>".$this->getGenero().
    "<br>"."<strong>Duracion:</strong>".$this->getDuracion()."<br>"."<strong>Restriccion:</strong>".$this->getRestriccion().
    "<br>"."<strong>Sinopsis:</strong>".$this->getSinopsis()."<br>";}
}