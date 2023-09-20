<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>ADMIN CRUD</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Gestión Usuarios
                        <form method="GET" action="admin_dashboard.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search" placeholder="Buscar usuario" aria-describedby="search-button">
                                <button class="btn btn-outline-secondary" type="submit" id="search-button">Buscar</button>
                            </div>
                        </form>
                        </h4>
                    </div>
                    <!-- Tabla para los admin -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <a href="user_create.php" class="btn btn-primary float-end">Agregar Admin</a>
                                <tr>
                                    <th>id_user</th>
                                    <th>nombre_usuario</th>
                                    <th>email</th>
                                    <th>nombre</th>
                                    <th>apellido</th>
                                    <th>dni</th>
                                    <th>genero</th>
                                    <th>fecha_nacimiento</th>
                                    <th>provincia</th>
                                    <th>departamento</th>
                                    <th>rol</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Conectar a la base de datos
                                require '../connection/connection_bd.php';

                                if ($conn->connect_error) {
                                    die("Error de conexión: " . $conn->connect_error);
                                }

                                // Consulta SQL para obtener los datos de administradores (rol 1)
                                $sql_admin = "SELECT * FROM store.sign_up WHERE rol = 1";

                                $result_admin = $conn->query($sql_admin);

                                if ($result_admin->num_rows > 0) {
                                    while ($row = $result_admin->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id_user"] . "</td>";
                                        echo "<td>" . $row["nombre_usuario"] . "</td>";
                                        echo "<td>" . $row["email"] . "</td>";
                                        echo "<td>" . $row["nombre"] . "</td>";
                                        echo "<td>" . $row["apellido"] . "</td>";
                                        echo "<td>" . $row["dni"] . "</td>";
                                        echo "<td>" . $row["genero"] . "</td>";
                                        echo "<td>" . $row["fecha_nacimiento"] . "</td>";
                                        echo "<td>" . $row["provincia"] . "</td>";
                                        echo "<td>" . $row["departamento"] . "</td>";
                                        echo "<td>" . $row["rol"] . "</td>";
                                        echo "<td>";
                                        echo "<a href='edit_user.php?id=" . $row["id_user"] . "' class='btn btn-primary'>Editar</a>";
                                        echo "<a href='delete_user.php?id=" . $row["id_user"] . "' class='btn btn-danger'>Eliminar</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "No hay administradores para mostrar.";
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id_user</th>
                                    <th>nombre_usuario</th>
                                    <th>email</th>
                                    <th>nombre</th>
                                    <th>apellido</th>
                                    <th>dni</th>
                                    <th>genero</th>
                                    <th>fecha_nacimiento</th>
                                    <th>provincia</th>
                                    <th>departamento</th>
                                    <th>rol</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                                // Conectar a la base de datos
                                require '../connection/connection_bd.php';

                                if ($conn->connect_error) {
                                    die("Error de conexión: " . $conn->connect_error);
                                }

                                // Consulta SQL para obtener los datos de usuarios
                                $sql = "SELECT * FROM store.sign_up";

                                // Verifica si se envió una búsqueda
                                if (isset($_GET['search']) && !empty($_GET['search'])) {
                                    // Obtiene el término de búsqueda del formulario
                                    $search_term = trim($_GET['search']);
                                    // Modifica la consulta SQL para buscar coincidencias en varios campos (ajusta según tus necesidades)
                                    $sql_users = "SELECT * FROM store.sign_up WHERE id_user LIKE '%$search_term%' OR nombre_usuario LIKE '%$search_term%' 
                                    OR nombre LIKE '%$search_term%' OR apellido LIKE '%$search_term%' OR email LIKE '%$search_term%'";
                                }else{
                                    $sql_users = "SELECT * FROM store.sign_up WHERE rol = 2";
                                }

                                //$sql_users = "SELECT * FROM store.sign_up WHERE rol = 2";
                                $result_users = $conn->query($sql_users);

                                if ($result_users->num_rows > 0) {
                                    while ($row = $result_users->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id_user"] . "</td>";
                                        echo "<td>" . $row["nombre_usuario"] . "</td>";
                                        echo "<td>" . $row["email"] . "</td>";
                                        echo "<td>" . $row["nombre"] . "</td>";
                                        echo "<td>" . $row["apellido"] . "</td>";
                                        echo "<td>" . $row["dni"] . "</td>";
                                        echo "<td>" . $row["genero"] . "</td>";
                                        echo "<td>" . $row["fecha_nacimiento"] . "</td>";
                                        echo "<td>" . $row["provincia"] . "</td>";
                                        echo "<td>" . $row["departamento"] . "</td>";
                                        echo "<td>" . $row["rol"] . "</td>";
                                        echo "<td>";
                                        echo "<a href='edit_user.php?id=" . $row["id_user"] . "' class='btn btn-primary'>Editar</a>";
                                        echo "<a href='delete_user.php?id=" . $row["id_user"] . "' class='btn btn-danger'>Eliminar</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "No hay usuarios para mostrar.";
                                }
                                // Cerrar la conexión a la base de datos
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
