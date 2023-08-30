<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 400px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>


<body>
    <div class="container">
        <form action="signupstore2.php" method="POST">
            <h1>Registro</h1>
            <div class="form-group">
                <label for="nombre_usuario">Nombre de usuario:</label>
                <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div>
                <button type="submit">Siguiente</button>
            </div>
        </form>
    </div>
</body>

</html>