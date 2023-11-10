<?php 
include ('material.php');
include ('libro.php');
include ('dvd.php');

$libro1 = new Libro("Libro 1", "Autor 1", "ISBN1", false, 300);
$libro2 = new Libro("Libro 2", "Autor 2", "ISBN2", false, 250);
$dvd1 = new DVD("DVD 1", "Director 1", "DVD1", false, 120, "Drama");
$dvd2 = new DVD("DVD 2", "Director 2", "DVD2", false, 90, "Comedia");


?>