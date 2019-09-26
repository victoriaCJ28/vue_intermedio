<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ----------------------Materialize css ----------------------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Login con Vue&#46;js&#44 PHP&#47; MySQLI y Materialize</title>

</head>

<body>
    <nav>
        <div class="nav-wrapper  grey darken-1">
        
        <a style="margin-right:20px; margin-top:15px;" class="waves-effect waves-light btn right red darken-4">Salir</a>
            
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <h5 class="left-align" style="margin-left:20px;">Bienvenido&#46; <?= $row['nombre']; ?></h5>
                </li>

            </ul>
        </div>
    </nav>

    <h1 class="center-align">Administraci&oacute;n</h1>

</body>

</html>