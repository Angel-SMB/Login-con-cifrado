<!DOCTYPE html>
<?php
$user = session();
?>
<html lang="e">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#ffff, #40b1c8, #4082c8);
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            padding: 10px 0;
            pointer-events: none;
            transition: .5s;
            top: -20px;
            left: 0;
            color: #4082c8;
            font-size: 12px;
        }


        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            border-radius: 5px;
        }

        .login-box button:hover {
            background: #4082c8;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #4082c8,
                0 0 25px #4082c8,
                0 0 50px #4082c8,
                0 0 100px #4082c8;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: black;
            background-color: white;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: .5s;
            margin-bottom: -12px;
        }

        .btn:hover {
            background: #df3813;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #df3813,
                0 0 25px #df3813,
                0 0 50px #df3813,
                0 0 100px #df3813;
        }
    </style>
</head>


<body>

    <a style="color:white; margin-left:150px;" href="salir">
        <span class="item-name">Cerrar sesión </span>
    </a>

    <div class="login-box">
        <h2 style="color:white">Bienvenido, <?= $user->get('nombre') ?></h2>

        <form class="user" method="POST" onsubmit="" action="<?php echo base_url(); ?>/SigninController/loginAuth">
            <div class="user-box">
                <input type="text" name="telefono" id="telefono" value="<?= $user->get('id_usuario') ?>" disabled>
                <label>Número de usuario</label>
            </div>
            <div class="user-box">
                <input type="text" name="telefono" id="telefono" value="<?= $user->get('telefono') ?>" disabled>
                <label>Número de telefono</label>
            </div>
            <div class="user-box">
                <input type="text" name="pregunta" id="pregunta" value="<?= $user->get('pregunta') ?>" disabled>
                <label>Pregunta de recuperación</label>
            </div>
            <div class="user-box">
                <input type="text" name="respuesta_pregunta" id="respuesta_pregunta" value="<?= $user->get('respuesta_pregunta') ?>" disabled>
                <label>Respuesta de recuperación</label>
            </div>
            <a class="btn" href="salir">
                <span class="item-name">Cerrar sesión </span>
            </a>


        </form>
    </div>
</body>

</html>