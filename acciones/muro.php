<?php

require("../config/config.php");
require("../config/arrays.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../web/css/theme.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>

<?php

//si se entra por POST genial, sino chau chau adiós

if ($_POST){
    $mensajePost = $_POST['mensaje'];
    //Parsea desde el array de caracteres especiales a caracteres normales
    $mensajeCaracteresEspeciales = str_replace(array_keys($caracteresLocos), $caracteresLocos, $mensajePost);
    //Cuenta los caracteres del mensaje post-parse de caracteres especiales
    $mensajeCaracteresContados = strlen($mensajeCaracteresEspeciales);

    if (empty($mensajePost)){
        echo
        "<body class='bg-danger'>
        <div class='container-fluid text-center'>
        <div class='jumbotron jumbotron-fluid bg-danger'>
        <h1 class='display-4 mx-auto'>Not cool dude</h1>
        <img src='../contenido/ohshit.png' height='480' width='720' alt='JoJohShit' class='border mx-auto d-block img-fluid'>
        <p class='my-2 h4 font-weight-bold'>¡Oh No! Falta contenido para enviar al muro :(</p>
        <button type='button' class='btn btn-info'><a class='text-light' href='../index.php'>Volver al sitio</a></button></div></div>
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin=
        'anonymous'></script>
        </body>";

    }elseif($mensajeCaracteresContados > 200){
        echo
        "<body class='bg-danger'>
        <div class='container-fluid text-center'>
        <div class='jumbotron jumbotron-fluid bg-danger'>
        <h1 class='display-4 mx-auto'>Not cool dude</h1>
        <img src='../contenido/ohshit.png' height='480' width='720' alt='JoJohShit' class='border mx-auto d-block img-fluid'>
        <p class='my-2 h4 font-weight-bold'>Podes solamente enviar hasta 200 caracteres :(</p>
        <button type='button' class='btn btn-info'><a class='text-light' href='../index.php'>Volver al sitio</a></button></div></div>
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin=
        'anonymous'></script>
        </body>";

    }else{
    //Muestra mensaje que pasó la validación       
    echo
    "<body class='bg-success'>
    <div class='container'>
    <div class='jumbotron jumbotron-fluid bg-success text-light'>
    <h1 class='display-4 mx-auto'>Gracias &hearts;</h1>";
    //Limpieza de mensaje para que muestre exactamente lo que se va a ver en el index.php - Copypastear lo de abajo más arriba rompe el codigo sino...
    $mensajeMostrarContacto = trim(str_replace('  ', ' ', $mensajeCaracteresEspeciales));
    $mensajeMostrarContactoFinal = str_replace("\r\n", " - ", $mensajeMostrarContacto);
    echo
    "<p>por mandar tu mensaje al muro :) - el mensaje enviado es:</p>
    <p class='lead'>" . nl2br(htmlentities(trim($mensajeMostrarContactoFinal))) . "</p>
    <button type='button' class='btn btn-info'><a class='text-light' href='../index.php'>Volver al sitio</a></button></div></div>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin=
    'anonymous'></script>
    </body>"
    ;

    //Entrar a muro.txt, conseguir sus contenidos, y reemplazando los espacios multiples inutiles en el mensaje por uno solo + quitando los linebreaks reemplazandolos por " - "
    $muro = ("../contenido/muro.txt");
    $mensajeCaracteresEspeciales .= file_get_contents($muro);
    $mensajeLimpiaEspacio = trim(str_replace('  ', ' ', $mensajeCaracteresEspeciales));
    $mensajeLimpiaLineas = str_replace("\r\n", " - ", $mensajeLimpiaEspacio);

    //Setear tiempo a la hora de Bs As Argentina
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechahora = date('m/d/Y h:i:s a', time());
    //Busca de los arrays para darnos un autor divertido
    $animalAutor = $animal[mt_rand(0, count($animal) - 1)];
    $paisAutor = $pais[mt_rand(0, count($pais) - 1)];
    //Lo que va printeado al .txt + printeo
    $mensajeFinal = "\n\n $animalAutor de $paisAutor ha escrito a las $fechahora:\n - $mensajeLimpiaLineas\n\n";
    file_put_contents($muro, $mensajeFinal);
    }

}else{
    die;
}

?>

</html>