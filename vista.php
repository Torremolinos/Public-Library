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
    <title>Biblioteca Babel</title>
    <style>
        body {
            background-color:antiquewhite;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        h1,
        h2 {
            color:brown;
        }

        .green-text {
            color: green;  
        }
        .red-text {
            color: red;  
        }
    </style>
</head>

<body>
    <h1><u>Biblioteca Babel</u></h1>
    <!--Primero tenemos los libros sin prestar-->
    <h2><u>Libros antes de ser prestados</u></h2>

    <?php
    /*Los pongo en true porque en el metodo al forzarlo false no me deja luego cambiarlo a true
    asi que pongo true here por default*/
    $libro1 = new Libro("El barco de Teseo", "J. J. Abrams", "1234567890", true, 472);
    $libro2 = new Libro("El nombre del viento", "Patrick Rothfuss", "9788401337208", true, 880);
    echo "-----------------------------------------------------------<br>";
    echo $libro1;
    echo "<br>";
    echo "-----------------------------------------------------------<br>";
    echo $libro2;
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>DVDs antes de ser prestados</u></h2>

    <?php
    $dvd1 = new DVD("American History X", "Tony Kaye", "4321098765", true, 118, "Drama");
    $dvd2 = new DVD("El gran Hotel Budapest", "Wes Anderso", "98745628954", false, 99, "Comedia, Drama'?'.");
    echo "-----------------------------------------------------------<br>";
    echo $dvd1;
    echo "<br>";
    echo "-----------------------------------------------------------<br>";
    echo $dvd2;
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>Prestamos el libro</u></h2>

    <?php
    $libro1->setdisponible(true);
    echo "-----------------------------------------------------------<br>";
    echo $libro1->prestar();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $libro1;
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>Prestamos el DVD</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $libro1->prestar();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $libro1;
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2>Intentamos volver a tomar prestado el mismo DVD</h2>

    <?php

    $dvd2 = new DVD("El gran Hotel Budapest", "Wes Anderso", "98745628954", false, 99, "Comedia, Drama'?'.");
    echo "-----------------------------------------------------------<br>";
    echo $dvd2;
    echo "<br>-----------------------------------------------------------";
    ?>
    <h2><u>Devolvemos los materiales</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $libro1->prestar();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $libro1;
    echo "<br>-----------------------------------------------------------";
    ?>
    <h2><u>Intentamos devolver material no prestado</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $libro1->prestar();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $libro1;
    echo "<br>-----------------------------------------------------------";
    ?>
    <?php
    ?>
</body>

</html>