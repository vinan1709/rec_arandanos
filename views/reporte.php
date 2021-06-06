<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../js/reportes.js"></script>
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
                        <a class="nav-link" href="recoleccion.php">Recolección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="reporte.php">Reporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container container-fluid" style="background: grey;color: white;">      
        <div class="row">
            <div class="col-md-2" style="text-align: center;"><img src="../img/arandanos.jpg" style="width: 100px;"></div>
            <div class="col-md-10" style="display: flex; align-items: center;"><h1>Recolección del día</h1></div>        
        </div>   
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-md-2" style="text-align: center;"></div>
        <div class="col-md-10"><h4>Fecha:</h4><p class="txt_fecha"></p><br>
        <h4>Encargado:</h4><p class="txt_encargado"></p> </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="text-align: center;"><h2>Mejor recolector</h2><img src="../img/star.png"><h4 class="txt_recolector"></h4></div>
        <div class="col-md-6" style="text-align: center;"><h2>Kilogramos recogidos</h2>
            <div><h3 style="padding: 1.5em 0.8em;
                             background: #560556;
                            width: fit-content;
                            margin: auto;
                            border-radius: 50%;
                            color: white;" class="txt_cantidad"></h3></div>
        </div>    
    </div>
    

 

</body>

</html>
