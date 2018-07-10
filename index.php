<?php
    session_start();
    require "idioma.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitio Multilenguaje con php 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-light bg-faded">
        <div class="nav navbar-nav">
            <a href="#" class="nav-item nav-link active">
                <?php echo $inicio; ?><span class="sr-only">(current)</span>
            </a>
        </div>
    </nav>
    <div><?php echo $holamundo; ?></div>
    <div class="dropdown closed">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" >
            <?php echo $cambiarIdioma; ?>
        </button>
        <div class="" aria-labelledby="dropdownMenu2">
            <a href="changelanguage.php?language=es">
                <button class="dropdown-item"><?php echo $spanish; ?></button>
            </a>
            <a href="changelanguage.php?language=en">
                <button class="dropdown-item"><?php echo $english; ?></button>
            </a>
            <a href="changelanguage.php?language=fr">
                <button class="dropdown-item"><?php echo $french; ?></button>
            </a>
        </div>
    </div>

</body>
</html>