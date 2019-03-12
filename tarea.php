<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promedio final</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <style>

body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("bg.jpg");
    background-attachment: fixed; /*Pra que la imagen este fija*/
}



.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type = "text"], .box input[type = "password"]{
    border: 0;
    background: none;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box input[type = "text"]:focus, .box input[type = "password"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type = "submit"]:hover{
    background: #2ecc71;}

    </style>

</head>
<body>
    <!--<h1 style="font: oblique bold 120% cursive; text-align: center; font-size: 70px;">Promedio</h1> -->

    <center><form class="box" action="tarea.php" method="#">
            <h1 style="text-decoration: underline;">Calificaciones Periodo X</h1>
            <h2 style="font: oblique bold 120% cursive; text-align: center; color: white;">Calificaciones primer parcial: </h2>
            <input type="text" name="asig11" placeholder="Ingenieria de software">
            <input type="text" name="asig12" placeholder="E-Learning">
            <input type="text" name="asig13" placeholder="Seguridad informatica">
            <br>
            <h2 style="font: oblique bold 120% cursive; text-align: center; color: white;">Calificaciones segundo parcial: </h2>
            <input type="text" name="asig21" placeholder="Ingenieria de software">
            <input type="text" name="asig22" placeholder="E-Learning">
            <input type="text" name="asig23" placeholder="Seguridad informatica">
            <br>
            <h2 style="font: oblique bold 120% cursive; text-align: center; color: white;">Calificaciones tercer parcial: </h2>
            <input type="text" name="asig31" placeholder="Ingenieria de software">
            <input type="text" name="asig32" placeholder="E-Learning">
            <input type="text" name="asig33" placeholder="Seguridad informatica">
            <br>
            <h2 style="font: oblique bold 120% cursive; text-align: center; color: white;">Proyecto: </h2>
            <input type="text" name="pext1" placeholder="Proyecto EXTRA">

            <input type="submit" name="cal" value="submit">
            </form>
    </center>

    <?php

    if(isset($_REQUEST['cal'])){

        $pext1 = $_REQUEST["pext1"]; /*cal del proyeto*/

        /*valor proyecto final equivale a 1/3 de la calificacion*/ 
        $pf = ($pext1 * (1/3)); 
        
        /*asignaturas primer parcial*/
        $asig11 = $_REQUEST["asig11"];
        $asig12 = $_REQUEST["asig12"];
        $asig13 = $_REQUEST["asig13"];

        $par1 = (($asig11 + $asig12 + $asig13) /3); //promedio 1r parcial

        /* aignaturas segundo parcial*/
        $asig21 = $_REQUEST["asig21"];
        $asig22 = $_REQUEST["asig22"];
        $asig23 = $_REQUEST["asig23"];

        $par2 = (($asig21 + $asig22 + $asig23) /3); //promedio 2° parcial

        /* aignaturas segundo parcial*/
        $asig31 = $_REQUEST["asig31"];
        $asig32 = $_REQUEST["asig32"];
        $asig33 = $_REQUEST["asig33"];

        $par3 = (($asig31 + $asig32 + $asig33) /3); //promedio 3° parcial

        $prototipo = (($par1 + $par2 + $par3) /3); //para calcular el 2/3 de la calificacion

        /* calificanion en total de los 3 parciales */
        $prom = ($prototipo * (2/3));

        $prom1 = (($pf + $prom));

        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio 1r parcial: $par1</h2>";
        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio 2° parcial: $par2</h2>";
        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio 3° parcial: $par3</h2>";
        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio proyecto extra: $pf</h2>";
        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio 3 parciales: $prom</h2>";
        print "<h2 style=\"font: oblique bold 120% cursive; text-align: center; color: white;\">Promedio final: $prom1</h2>";

    }        

    ?>

</body>
</html>
