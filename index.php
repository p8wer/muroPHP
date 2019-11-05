<?php
    
    require ("config/config.php");
    require ("config/arrays.php");
        
    $muro = file_get_contents("contenido/muro.txt");
        
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Aprendiendo Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="web/css/theme.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        p {
            overflow-wrap: break-word;
        }
    </style>
    <!-- https://stackoverflow.com/questions/34453095/javascript-display-remaining-characters-of-text-area -->
    <script>
        function textareaLengthCheck(el) {
            var mensaje = el.value.length;
            var charactersLeft = 200 - mensaje;
            var count = document.getElementById('lblRemainingCount');
            count.innerHTML = " Te quedan " + charactersLeft + " caracteres para escribir...";
        }
    </script>
</head>

<body class="bg-dark text-light">

    <div class="container mt-3">
        <div class="row">
            <div class="col mx-auto d-block">
                <h1 class="h2 text-center">Bienvenido a este maravilloso e inofensivo muro</h1>
                <p class="text-center align-middle">¿No sería genial dejar tu mensaje acá abajo? Copate, es anónimo y es para aprender 😁</p>
                <p class="text-center align-middle"><a class="btn btn-primary text-center mx-auto align-middle" href="index.php" role="button">Refresca la Web <img src="https://img.icons8.com/material-rounded/24/000000/restore-page.png"></a></p>
                <!-- SOURCE ICONO: https://icons8.com/icon/98350/restore-page - Restore Page icon by Icons8 -->
            </div>
            <div class="col mx-auto d-block">
            <p class="text-center"><u><a href="contenido/OLDmuro.txt" class="text-light">Clickeame para ver el contenido del primer muro.txt público (RAW)</a></u></p>
                <form action="acciones/muro.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="h5" for="mensaje"><?php echo $frases[mt_rand(0, count($frases)-1)] ?></label><p id="lblRemainingCount"><small></small></p>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3" maxlength="200" onkeypress="textareaLengthCheck(this)"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">


                <?php
    
                    //Aca viene hte PHP Dark Magicks
    
                    echo "<div class='my-3 mx-1 bg-secondary border p-1'><p class='p-2'>";
                            
                    echo nl2br(htmlentities(trim($muro)));

                    echo "</p></div>";
            
        ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>