<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $usernameOrEmail = trim($_POST["username_or_email"]);
    $password2 = trim($_POST["password"]);//Se cambió el nombre de la variable porque se superpuso el $password de la connection_bd.php
    // Conectar a la base de datos
    require '../connection/connection_bd.php';

    // Verificar si el valor ingresado es un nombre de usuario o un correo electrónico
    $sql = "SELECT nombre_usuario, email, password FROM store.sign_up WHERE nombre_usuario = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
    $stmt->execute();
    $stmt->store_result(); // Almacena el resultado en el statement

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($nombre_usuario, $email, $hashed_password); // Vincula las columnas a variables
        $stmt->fetch(); // Obtiene los valores de las variables

        // Verificar si la contraseña ingresada coincide con el hash almacenado en la base de datos
        if (password_verify($password2, $hashed_password)) {
            // Autenticación exitosa, establece la sesión y redirige al usuario
            $_SESSION["logged_in"] = true;

            //$_SESSION["rol"] = $rol; Este es para rol, definir la variable primero, luego la tabla en la base de datos
            header("Location: dashboard.php"); // Cambia esto a la página que desees redirigir después del inicio de sesión exitoso
            exit;
        } else {
            // Autenticación fallida, muestra un mensaje de error
            $error_message = "Credenciales incorrectas, por favor intenta nuevamente.";
            echo "Contraseña ingresada: " . $password2 . "<br>";
            echo "Contraseña almacenada en la base de datos: " . $hashed_password . "<br>";
        }
    } else {
        // Autenticación fallida, muestra un mensaje de error
        $error_message = "Credenciales incorrectas, por favor intenta nuevamente.";
    }
    // Cerrar el statement y la conexión
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Validation</title>
</head>
<body>
<?php if (isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
<?php } ?>
</body>
</html>