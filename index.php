<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/functions.js"></script>
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Gestión de empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/recoleccion.php">Recolección</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/reporte.php">Reporte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h1>Empleados</h1>

<div class="container-md">
    <form method="post">
    <div class="row">
            <div class="col-md-6"><div class="mb-3">
            <label for="name" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="documento" class="form-label">Documento</label>
            <input type="text" class="form-control" maxlength="10" id="documento" aria-describedby="emailHelp">
        </div></div>
            <div class="col-md-6">
                <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Cargo</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Recolector</option>
                <option value="2">Encargado</option>
            </select>
        </div></div>
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
        </tr>
        </thead>
        <tbody class="cuerpo_tabla">
        
        </tbody>
    </table>
</div>
</body>
</html>
