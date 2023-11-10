<?php
class Libro extends Material
{
    private $numPaginas;

    public function __construct($titulo, $autor, $ISBN, $disponible, $numPaginas,)
    {
        parent::__construct($titulo, $autor, $ISBN, $disponible);
        $this->numPaginas = $numPaginas;
    }
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;
    }
    
    public function __toString() {
        return parent::__toString() . "<b>Número de Páginas:</b> {$this->numPaginas}";
    }

}