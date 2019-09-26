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
    <!-- -----------------------Estilo personalizado-------------------------- -->
    <style>
        element.style {}

        .input-field .prefix.active {
            color: #1565c0 !important;
        }

        input[type=password]:not(.browser-default):focus:not([readonly]) {
            border-bottom: 1px solid #1565c0 !important;
            -webkit-box-shadow: 0 1px 0 0 #1565c0 !important;
            box-shadow: 0 1px 0 0 #1565c0 !important;
        }

        input[type=password]:not(.browser-default):focus:not([readonly])+label {
            color: #1565c0 !important;
        }

        input[type=text]:not(.browser-default):focus:not([readonly]) {
            border-bottom: 1px solid #1565c0 !important;
            -webkit-box-shadow: 0 1px 0 0 #1565c0 !important;
            box-shadow: 0 1px 0 0 #1565c0 !important;
        }

        input[type=text]:not(.browser-default):focus:not([readonly])+label {
            color: #1565c0 !important;
        }
    </style>

    <!-- ------------------------Titulo----------------------------- -->
    <h2 class="center-align">Login con Vue&#46;js&#44 PHP&#47; MySQLI y Materialize</h2>
    <hr>
    <br>
    <div class="container ">
        <div class="row">
            <div class="col s8 offset-s2"> 
                <div class="card grey lighten-2"> <!--card-->
                    <div class="card-title center-align">
                        <br>
                        <h4 class="blue-text text-darken-4"> Inicio de Sesi&oacute;n</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field  col s6">
                                        <i class="material-icons prefix ">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate" v-model="logDetails.username" v-on:keyup="keymonitor">
                                        <label for="icon_prefix">Usuario</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">https</i>
                                        <input id="icon_https" type="password" class="validate" v-model="logDetails.password" v-on:keyup="keymonitor">
                                        <label for="icon_https">Contrase&ntilde;a</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action center-align">
                        <button class="btn waves-effect waves-light blue darken-4" type="submit" name="action"  @click="checkLogin();">Ingresar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div> <!--card-->
            </div>
        </div>
    </div>

    <!-- ----------------------Materialize js ----------------------------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../assets/js/vue.js"></script>
    <script src="../assets/js/axios.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>