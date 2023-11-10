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
        //Aqui si es false automaticamente te dice que esta en prestamos pero, si es true pasa a ser false dandote el otro mensaje.
        if ($this->disponible === false) {
            return 'El libro con el titulo: <b>' . $this->titulo . '</b><span class="red-text">"esta actualmente <b>en prestamo</b>, no se puede prestar."</span>';
        } else {
            $this->disponible = false;
            return 'El libro con el titulo: <b>' . $this->titulo . '</b><span class="green-text">"se ha prestado correctamente."</span>';
        }
    }
    public function devolver()
    {
        if ($this->disponible === true) {
            return 'El libro con el titulo: <b>' . $this->titulo . '</b><span class="red-text">"No se puede devolver <b>aun no se ha prestamo</b>"</span>';
        } else {
            $this->disponible = true;
            return 'El libro con el titulo: <b>' . $this->titulo . '</b><span class="green-text">" se devolvio correctamente."</span>';
        }
    }
    public function __toString()
    {
        /*aqui fabrico un ternario para que escriba si esta disponible o no, dependiendo del estado del Bolean*/
        $disponibilidad = $this->disponible ? '<b><span class="green-text">"Disponible"</span></b>' : '<b><span class="red-text">"No Disponible"</span></b>';
        return "<b>Titulo:</b> {$this->titulo}<br><b>Autor:</b> {$this->autor}<br><b>ISBN:</b> {$this->ISBN}<br><b>Disponibilidad:</b> $disponibilidad";
    }
}
