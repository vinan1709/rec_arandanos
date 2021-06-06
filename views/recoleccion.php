<?php
require_once '../config/databaseconnect.php';
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../js/recoleccion.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Gestión de empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="recoleccion.php">Recolección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reporte.php">Reporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Recolección</h1>

    <div class="container-md">
        <form method="post">
            <div class="row">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del recolector</label>
                    <select class="form-control select_recolector" >
                        <option value="">Seleccione</option>
                        <?php
                        $query = "SELECT * FROM Usuarios where cargo_id = 1";
                        $consulta=mysqli_query($conexion, $query);

                        while ($fila = mysqli_fetch_assoc($consulta)) {
                            $nombre_completo = $fila["nombres"] . ' ' .$fila["apellidos"];
                            echo '<option value="'.$fila["id_usuario"].'">'.$nombre_completo.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad recogida</label>
                    <input type="text" class="form-control" id="cantidad" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del encargado</label>
                    <select class="form-control select_encargado" >
                        <option value="">Seleccione</option>
                        <?php
                        $query = "SELECT * FROM Usuarios where cargo_id = 2";
                        $consulta=mysqli_query($conexion, $query);

                        while ($fila = mysqli_fetch_assoc($consulta)) {
                            $nombre_completo = $fila["nombres"] . ' ' .$fila["apellidos"];
                            echo '<option value="'.$fila["id_usuario"].'">'.$nombre_completo.'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <input type="button" value="Agregar" class="addrecoleccion btn btn-primary" />
        </form>
    </div>
    <div class="container-md">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Recolector</th>
                    <th scope="col">Cantidad KG</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Encargado</th>
                </tr>
            </thead>
            <tbody class="cuerpo_tabla">


            </tbody>
        </table>
    </div>
</body>

</html>
