<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#ffffff, #40b1c8);
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
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label,
        .login-box .user-box select:focus~label,
        .login-box .user-box select:valid~label {
            top: -20px;
            left: 0;
            color: #40b1c8;
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
            background: #40b1c8;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #40b1c8,
                0 0 25px #40b1c8,
                0 0 50px #40b1c8,
                0 0 100px #40b1c8;
        }

        /* Estilos para el SELECT para que se vea como los INPUT */
        .login-box .user-box select {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
            /* Oculta la flecha por defecto en algunos navegadores */
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        /* Estilo para las opciones del SELECT */
        .login-box .user-box select option {
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            border: none;
        }

        .login-box button span {
            position: absolute;
            display: block;
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
            background: #11c99c;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #11c99c,
                0 0 25px #11c99c,
                0 0 50px #11c99c,
                0 0 100px #11c99c;
        }

        .alert {
            color: white;
            background-color: red;
            margin: 10px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 5px #c91111ff,
                0 0 25px #c91111ff,
                0 0 50px #c91111ff,
                0 0 100px #c91111ff;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <!-- start display error message -->
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <!-- end display error message -->
        <form class="user" method="POST" onsubmit="" action="<?php echo base_url(); ?>/SigninController/loginAuth">
            <div class="user-box">
                <input type="text" name="telefono" id="telefono" required>
                <label>Número de telefono</label>
            </div>
            <div class="user-box">
                <input type="password" name="uPassword" id="uPassword" required>
                <label>Contraseña</label>
            </div>
            <button type="submit" id="login">Ingresar</button>


            <a href="registro" class="btn">Regístrate</a>


        </form>
    </div>
</body>

</html>