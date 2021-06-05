<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/functions.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Gestión de empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recoleccion.php">Recolección</a>
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
                    <label for="name" class="form-label">Nombre del selector</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad recogida</label>
                    <input type="text" class="form-control" id="cantidad" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del encargado</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>



            <input type="button" value="Agregar" class="adduser btn btn-primary" />
        </form>
    </div>
    <div class="container-md">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Opcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>