<?php

/*
Datos personales 
Nombres - Apellido - Sexo - Estado Civil - DNI - Teléfono (Celular - Fijo) - Dirección (País -Provincia -Ciudad - Calle).
*/

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $sex = $_POST["sex"];
    $civil = $_POST["civil"];
    $dni = $_POST["dni"];
    $phone = $_POST["phone"];
    $cellphone = $_POST["cellphone"];
    $nationality = $_POST["nationality"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $street = $_POST["street"];

/*
Objetivo laboral
Campo para texto libre.
*/

    $objetive = $_POST["objetive"];

/*    
Experiencia Laboral
Empresa - Actividad de la empresa - Puesto - Nivel - País - Desde - Hasta - Área del puesto - Descripción - Personas a cargo - Persona de referencia. 
Campo Multiple
*/

    $company = $_POST["company"];
    $activity = $_POST["activity"];
    $position = $_POST["position"];
    $grade = $_POST["grade"];
    $country = $_POST["country"];
    $begin = $_POST["begin"];
    $end = $_POST["end"];
    $arera = $_POST["arera"];
    $description = $_POST["description"];
    $people = $_POST["people"];
    $reference = $_POST["reference"];

   
/*
Estudios
Casa de estudios - Nivel - Especialidad - Desde - Hasta.
*/

    $school = $_POST["school"];
    $level = $_POST["level"];
    $specialty = $_POST["specialty"];
    $studybegin = $_POST["studybegin"];
    $studyend = $_POST["studyend"];

/*    
Idiomas
Idioma - Oral – Escrito.
*/

    $language = $_POST["language"];
    $oral = $_POST["oral"];
    $written = $_POST["written"];



    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Datos del Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
    

    <legend class="text-center">Datos personales:</legend>
                        <!-- Nombres - Apellido - Sexo - Estado Civil - DNI - Teléfono (Celular - Fijo) - Dirección (País -Provincia -Ciudad - Calle). -->

    <?php

        echo "$name";
        echo "$surname";
        echo "$sex";
        echo "$civil";
        echo "$dni";
        echo "$phone";
        echo "$cellphone";
        echo "$nationality";
        echo "$state";
        echo "$city";
        echo "$street";

    ?>
    <legend class="text-center">Objetivo laboral:</legend>
    <!-- Campo para texto libre. -->

    $objetive = $_POST["objetive"];

    <legend class="text-center">Experiencia Laboral:</legend>
    <!-- Empresa - Actividad de la empresa - Puesto - Nivel - País - Desde - Hasta - Área del puesto - Descripción - Personas a cargo - Persona de referencia. --> Campo Multiple

    <?php
        if (!empty($company)) {
            for(i = 0; i < sizeof($company); i++){
                echo "$company[$i]";
                echo "$activity[$i]";
                echo "$position[$i]";
                echo "$grade[$i]";
                echo "$country[$i]";
                echo "$begin[$i]";
                echo "$end[$i]";
                echo "$arera[$i]";
                echo "$description[$i]";
                echo "$people[$i]";
                echo "$reference[$i]";
            }
        }
    ?>

    <legend class="text-center">Estudios</legend>
    <!-- Casa de estudios - Nivel - Especialidad - Desde - Hasta. -->

    <?php

        echo "$school";
        echo "$level";
        echo "$specialty";
        echo "$studybegin";
        echo "$studyend";

    ?>

    <legend class="text-center">Idiomas:</legend>
    <!-- Idioma - Oral – Escrito. -->

    <?php

        echo "$language";
        echo "$oral";
        echo "$written";

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>