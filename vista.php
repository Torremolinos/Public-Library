<?php
include('material.php');
include('libro.php');
include('dvd.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>

<body>
    <h1>Biblioteca Babel</h1>
    <h2>Libros antes de ser prestados</h2>
    <?php

    $libro1 = new Libro("1984", "George Orwell", "1234567890", true, 328);
    echo $libro1;
    ?>
    <h2>DVDs antes de ser prestados</h2>
    <?php
    $dvd1 = new DVD("Origen", "Christopher Nolan", "4321098765", false, 148, "Ciencia Ficción");
    echo $dvd1;
    ?>
    <h2>Prestamos el libro</h2>
    <?php
    ?>
    <h2>Prestamos el DVD</h2>
    <?php
    ?>
    <h2>Intentamos volver a tomar prestado el mismo DVD</h2>
    <?php
    ?>
    <h2>Devolvemos los materiales</h2>
    <?php
    ?>
    <h2>Intentamos devolver material no prestado</h2>
    <?php
    $libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", "5678901234", false, 417);
    ?>
    <?php
    ?>
</body>

</html>