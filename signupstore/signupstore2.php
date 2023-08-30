<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signupstorestyle.css">
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
        <form action="signup_validation.php" method="POST">

         <!-- Campos ocultos para conservar los datos del primer formulario -->
         <input type="hidden" name="nombre_usuario" value="<?php echo $_POST['nombre_usuario']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
            <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
            <input type="hidden" name="confirm_password" value="<?php echo $_POST['confirm_password']; ?>">
            
            <h1>Registro parte 2</h1>

            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" placeholder="Nombre" required>
          </div>
          <div class="form-group">
              <label for="apellido">Apellido:</label>
              <input type="text" name="apellido" placeholder="Apellido" required>
          </div>
          <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" name="dni" placeholder="DNI" required>
          </div>
          <div class="form-group">
            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
              <option value="1">Mujer</option>
              <option value="2">Hombre</option>
              <option value="3">Otro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required>
          </div>
          <div class="form-group">
            <label for="provincia">Provincia:</label>
            <input type="text" name="provincia" placeholder="Provincia" required>
          </div>
          <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" placeholder="Departamento" required>
          </div>
          <button type="submit">Registrarse</button>
        </form>
      </div>

      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Datos del primer formulario recibidos:";
        print_r($_POST);
    }
    ?>
</body>

</html>