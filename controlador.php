<?php
include('material.php');
include('libro.php');
include('dvd.php');


$libro1 = new Libro("El barco de Teseo", "J. J. Abrams", "1234567890", true, 472);
$libro2 = new Libro("El nombre del viento", "Patrick Rothfuss", "9788401337208", true, 880);
$dvd1 = new DVD("American History X", "Tony Kaye", "4321098765", true, 118, "Drama");
$dvd2 = new DVD("El gran Hotel Budapest", "Wes Anderson", "98745628954", true, 99, "Comedia, Drama'?'.");
$materiales = [$libro1, $libro2, $dvd1, $dvd2];
include('vista.php');
