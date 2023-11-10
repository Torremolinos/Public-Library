<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Babel</title>
    <style>
        body {
            background-color: antiquewhite;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        h1,
        h2 {
            color: brown;
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
    echo "-----------------------------------------------------------<br>";
    echo $materiales[0];
    echo "<br>";
    echo "-----------------------------------------------------------<br>";
    echo $materiales[1];
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>DVDs antes de ser prestados</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[2];
    echo "<br>";
    echo "-----------------------------------------------------------<br>";
    echo $materiales[3];
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>Prestamos el libro</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[0]->prestar();
    echo "<br>-----------------------------------------------------------";
    echo $materiales[0];
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2><u>Prestamos el DVD</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[3]->prestar();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $materiales[3];
    echo "<br>-----------------------------------------------------------";
    ?>

    <h2>Intentamos volver a tomar prestado el mismo DVD</h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[3]->prestar();
    echo "<br>";
    echo "-----------------------------------------------------------<br>";
    echo $materiales[3];
    echo "<br>-----------------------------------------------------------";
    ?>
    <h2><u>Devolvemos los materiales</u></h2>

    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[0]->devolver();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $materiales[0];
    echo "<br>-----------------------------------------------------------";
    echo "-----------------------------------------------------------<br>";
    echo $materiales[3]->devolver();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $materiales[3];
    echo "<br>-----------------------------------------------------------";
    ?>
    <h2><u>Intentamos devolver material no prestado</u></h2>
    <?php
    echo "-----------------------------------------------------------<br>";
    echo $materiales[2]->devolver();
    echo "<br>-----------------------------------------------------------";
    echo "<br>";
    echo $materiales[2];
    echo "<br>-----------------------------------------------------------";
    ?>
</body>

</html>