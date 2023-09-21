<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r($_POST); // Imprime el contenido de $_POST para depurar
    if (isset($_POST["nombre_usuario"])) {
        $nombre_usuario = $_POST["nombre_usuario"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
     // Comprobar si el registro es realizado por un administrador
    if (isset($_POST["registration_source"]) && $_POST["registration_source"] === "admin") {
        // Acciones específicas para registros de administradores aquí, por ejemplo, asignar roles.
        $rol = $_POST["role"]; // Puedes obtener el rol de los datos del formulario.
    } else {
        // Asignamos el rol 2 a los usuarios comunes
        $rol = 2;
    }

    } else {
       // Puedes mostrar un mensaje de error si no se reciben los datos
       echo "Error: Datos del primer formulario no recibidos.";
       exit;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["dni"]) && isset($_POST["genero"]) && isset($_POST["fecha_nacimiento"]) && isset($_POST["provincia"]) && isset($_POST["departamento"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $dni = $_POST["dni"];
            $genero = $_POST["genero"];
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            $provincia = $_POST["provincia"];
            $departamento = $_POST["departamento"];

        } else {
           // Mostrar un mensaje de error si no se reciben los datos del segundo formulario
           echo "Error: Datos del segundo formulario no recibidos.";
           exit;
        }
    }
    // Generar el hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Conectar a la base de datos
    require '../connection/connection_bd.php';

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO sign_up (nombre_usuario,email,password,confirm_password,nombre,apellido,dni,genero,fecha_nacimiento,provincia,departamento,rol) 
            VALUES ('$nombre_usuario','$email','$hashed_password','$confirm_password','$nombre','$apellido','$dni','$genero','$fecha_nacimiento','$provincia','$departamento','$rol')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Registro insertado correctamente
        echo "Registro guardado exitosamente";
    } else {
        // Error al insertar el registro
        echo "Error al guardar el registro: " . $conn->error;
    }
    // Cerrar la conexión
    $conn->close();
}

?>