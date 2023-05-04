<?php
include_once('./drive-download-20230425T183914Z-001/DatabaseProces.php')

$products = New DatabaseProcess();
$products -> getAll();
$results = $products -> getAll();  



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title style="font-style: oblique;">Administrador</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/grid/">



    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 2.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
</head>

<body class="py-2" style="background-color: gray; ">
    <header>
        <nav class="navbar navbar-dark fixed-top bg-dark">
            <div style="margin-left: 50px; margin-right: 500px;">
            </div>
        </nav>
    </header>

    <main>
        <div class="container">

            <center>
                <h1>Vista Administrador</h1>
            </center>
            <center>
                <p>Aqui puedes Añadir, Editar, Eliminar</p>
            </center>


            <h2 class="mt-2">Productos</h2>
            <br>
            <nav class="background-color:#faf0e6">
                <div class="card" class="container-fluid">
                </div>
            </nav>
            <br>

            <strong>
                <center>
                    <div class="row mb-2">
                        <div class="col-lg-2 themed-grid-col">Id</div>
                        <div class="col-2 themed-grid-col">nombre</div>
                        <div class="col-2 themed-grid-col">Tipo </div>
                        <div class="col-2 themed-grid-col">Precio</div>
                        <div class="col-2 themed-grid-col">Cantidad</div>
                    </div>
                </center>
            </strong>

            <?php
            foreach($results as $result) {
                echo "<div class='row mb-2'>

                <div class='col-sm-2 themed-grid-col'>".$result->id."</div>
                <div class='col-sm-2 themed-grid-col'>".$result->nombre_productos."</div>
                <div class='col-sm-2 themed-grid-col'>".$result->tipo."</div>
                <div class='col-sm-2 themed-grid-col'>".$result->precio."</div>
                <div class='col-sm-2 themed-grid-col'>".$result->cantidad."</div>


                </div>";

            }
            ?>
           
            <footer class="text-muted py-6 center">
                <div class="">
                    <p class="float mb-1">
                        <a class="w-30 btn btn-light btn-lg" href="./editarproductos.php">Editar</a>
                        <a class="w-60 btn btn-light btn-lg" href="./añadirproductos.php">Añadir</a>
                        <a class="w-60 btn btn-light btn-lg" href="./eliminarproductos.php">Eliminar</a>
                    </p>
                </div>
            </footer>
            <h2 class="mt-2">Clientes</h2>
            <br>
            <nav class="background-color:#faf0e6">
                <div class="card" class="container-fluid">
                </div>
            </nav>
            <br>

            <center><strong>
                    <div class="row mb-2">
                        <div class="col-2 themed-grid-col">Id</div>
                        <div class="col-2 themed-grid-col">Nombre</div>
                        <div class="col-2 themed-grid-col">Apellido</div>
                        <div class="col-2 themed-grid-col">Documento</div>
                    </div>
                </strong></center>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-2 themed-grid-col"></div>
            </div>
            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float mb-1">
                        <a class="w-20 btn btn-light btn-lg" href="./editarclientes.php">Editar</a>
                        <a class="w-60 btn btn-light btn-lg" href="./añadirclientes.php">Añadir</a>
                        <a class="w-60 btn btn-light btn-lg" href="./eliminarclientes.php">Eliminar</a>
                    </p>
                </div>
            </footer>
            <h2 class="mt-2">Ventas</h2>
            <br>
            <nav class="background-color:#faf0e6">
                <div class="card" class="container-fluid">
                </div>
            </nav>
            <br>

            <center><strong>
                    <div class="row mb-2">
                        <div class="col-2 themed-grid-col">Id</div>
                        <div class="col-2 themed-grid-col">Producto</div>
                        <div class="col-2 themed-grid-col">Valor venta</div>
                    </div>
                </strong></center>



            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
                <div class="col-sm-2 themed-grid-col"></div>
            </div>
            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float mb-1">
                        <a class="w-60 btn btn-light btn-lg" href="./editarventas.php">Editar</a>
                        <a class="w-60 btn btn-light btn-lg" href="./añadirventas.php">Añadir</a>
                        <a class="w-60 btn btn-light btn-lg" href="./eliminarventas.php">Eliminar</a>
                    </p>
                </div>
            </footer>
    </main>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="./home.php">Volver al Home</a>
            </p>
        </div>
    </footer>
</body>

</html>
