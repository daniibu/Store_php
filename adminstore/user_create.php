<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User Create</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>AGREGAR USUARIO
                            <a href="admin_dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="registration_source" value="admin">
                            <div class="mb-3">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">Nombre Usuario</label>
                                <input type="text" name="name" class="form-control" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">Apellido Usuario</label>
                                <input type="text" name="apellido" class="form-control" id="apellido">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">DNI Usuario</label>
                                <input type="text" name="name" class="form-control" id="dni">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">genero Usuario</label>
                                <input type="text" name="name" class="form-control" id="genero">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">Fecha de nacimineto</label>
                                <input type="text" name="name" class="form-control" id="fecha_nacimiento">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">provincia Usuario</label>
                                <input type="text" name="name" class="form-control" id="provincia">
                            </div>
                            <div class="mb-3">
                                <label for="nombre">departamento Usuario</label>
                                <input type="text" name="name" class="form-control" id="departamento">
                            </div>
                            <div class="mb-3">
                                <label for="role">Rol</label>
                                <select name="role" class="form-select" id="role">
                                    <option value="admin">Admin</option>
                                    <option value="user">Usuario</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_user" class="btn btn-primary">Guardar usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>