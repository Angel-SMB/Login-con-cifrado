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
            background: linear-gradient(#ffffff, #11c99c);
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
            background: #11c99c;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #11c99c,
                0 0 25px #11c99c,
                0 0 50px #11c99c,
                0 0 100px #11c99c;
        }

        .login-box button span {
            position: absolute;
            display: block;
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

    <div class="login-box">
        <h2>Registro</h2>
        <form class="user" method="POST" action="<?= base_url('registrar'); ?>">
            <div class="user-box">
                <input type="text" name="Rnombre" id="Rnombre" required>
                <label>Nombre</label>
            </div>
            <div class="user-box">
                <input type="text" name="Rtelefono" id="Rtelefono" required>
                <label>Número de telefono</label>
            </div>
            <div class="user-box">
                <input type="password" name="RPassword" id="RPassword" required>
                <label>Contraseña</label>
            </div>
            <div class="user-box">
                <select id="pregunta" name="pregunta" required>
                    <option value=""></option>
                    <option value="1">¿Cuál es tu película preferida?</option>
                    <option value="2">¿Cuál era el nombre de tu escuela primaria?</option>
                    <option value="3">¿En qué ciudad se conocieron tus padres?</option>
                    <option value="4">¿Cuál era el apodo que tenías en tu infancia?</option>
                    <option value="5">¿Cuál es el nombre de tu primo mayor?</option>
                    <option value="6">¿Cuál fue el nombre de tu primera mascota?</option>
                </select>
                <label>Pregunta de recuperación</label>
            </div>
            <div class="user-box">
                <input type="text" name="respuesta" id="respuesta" required>
                <label>Respuesta</label>
            </div>
            <button type="submit" id="login">Registrarme</button>

            <a href="login" class="btn">Atrás</a>
        </form>
    </div>
</body>

</html>