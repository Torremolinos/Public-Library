<?php
 
class Material {
    private $titulo;
    private $autor;
    private $ISBN;
    private $disponible;
 
    public function __construct($titulo, $autor, $ISBN, $disponible) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ISBN = $ISBN;
        $this->disponible = $disponible;
    }

    public function getTitulo() {
        return $this->titulo;
    }
 
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
 
    public function getAutor() {
        return $this->autor;
    }
 
    public function setAutor($autor) {
        $this->autor = $autor;
    }
 
    public function getISBN() {
        return $this->ISBN;
    }
 
    public function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }
    public function getdisponible() {
        return $this->disponible;
    }
 
    public function setdisponible($disponible) {
        $this->disponible = $disponible;
    }
    public function prestar(){
        if($this->disponible){
            $this->disponible = false;
            return "El libro con el titulo: '{$this->titulo}' esta disponible para el prestamo.";
        }else{
            return "El libro con el titulo: '{$this->titulo}' ya esta prestado.";
        }
    }
    public function devolver(){
        if($this->disponible = false){
            return "El libro con el titulo: '{$this->titulo}' aún no se ha devuelto.";
        }else{
            $this->disponible = true;
            return "El libro con el titulo: '{$this->titulo}' ha sido devuelto";
        }
    }
    public function __toString()
    {
        /*aqui fabrico un ternario para que escriba si esta disponible o no, dependiendo del estado del Bolean*/
        $disponibilidad = $this->disponible ? 'Disponible' : 'No Disponible';
        return "<b>Titulo:</b> {$this->titulo}<br><b>Autor:</b> {$this->autor}<br><b>ISBN:</b> {$this->ISBN}<br><b>Disponibilidad:</b> $disponibilidad";
    }
}
 

