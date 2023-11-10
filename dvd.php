<?php
class Dvd extends Material
{
    private $duracion;
    private $genero;

    public function __construct($titulo, $autor, $ISBN, $disponible, $duracion, $genero)
    {
        parent::__construct($titulo, $autor, $ISBN, $disponible);
        $this->duracion = $duracion;
        $this->genero = $genero;
    }
    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }
    
    public function __toString() {
        return parent::__toString() . "<b>Duracion:</b> {$this->duracion}<br><b>Genero:</b> {$this->genero}";
    }

}
