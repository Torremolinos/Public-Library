<?php

class Material
{
    private $titulo;
    private $autor;
    private $ISBN;
    private $disponible;

    public function __construct($titulo, $autor, $ISBN, $disponible)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ISBN = $ISBN;
        $this->disponible = $disponible;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }
    public function getdisponible()
    {
        return $this->disponible;
    }

    public function setdisponible($disponible)
    {
        $this->disponible = $disponible;
    }
    public function prestar()
    {
        // $this->disponible = false; he tenido que suprimir este paso porque siempre te queda en false
        // incluso cambiandolo con el setter desde la vista. Asi que cuando lo instancio lo dejo en true
        // Dando el mismo uso a la funcion pero si cambio a true ejecutara la funcion correctamente.
        if ($this->disponible === false) {
            return "El libro con el titulo: <b>'{$this->titulo}'</b> esta actualmente en prestamo, no se puede prestar.";
        } else {
            return 'El libro con el titulo: <b>' .$this->titulo. '</b><span class="green-text">"se ha prestado correctamente."</span>';
        }
    }
    public function devolver()
    {
        if ($this->disponible = false) {
            return "El libro con el <b>titulo:</b> '{$this->titulo}' aún no se ha devuelto.";
        } else {
            $this->disponible = true;
            return 'El libro con el titulo: <b>' .$this->titulo. '</b><span class="green-text">" se devolvio correctamente."</span>';
        }
    }
    public function __toString()
    {
        /*aqui fabrico un ternario para que escriba si esta disponible o no, dependiendo del estado del Bolean*/
        $disponibilidad = $this->disponible ? '<b><span class="green-text">"Disponible"</span></b>' : '<b><span class="red-text">"No Disponible"</span></b>';
        return "<b>Titulo:</b> {$this->titulo}<br><b>Autor:</b> {$this->autor}<br><b>ISBN:</b> {$this->ISBN}<br><b>Disponibilidad:</b> $disponibilidad";
    }
}
