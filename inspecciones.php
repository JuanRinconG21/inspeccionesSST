<?php
  include("./model/MySQL.php");
  $conexion = new MySQL();
  $pdo = $conexion->conectar();
  $sql = "SELECT * FROM inspecciones";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Juan Jose Rincon" />
    <meta name="generator" content="Hugo 0.122.0" />
    <title>Inspeccion Vehiculos · Inversiones Bellavista V1.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json" />
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <meta name="theme-color" content="#712cf9" />

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
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
            inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -0.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }

    #titulo,
    #titulobtn,
    #bd-theme {
        background-color: #a54f03;
        color: white;
        border: #a54f03;
    }

    #titulobtn {
        font-size: 55%;
    }

    #titulobtn:hover,
    #bd-theme:hover {
        background-color: #8a4101;
        border: #8a4101;
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet" />
</head>

<body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <h1>
            <a href="./index.php" class="btn mt-3 py-2 d-flex align-items-center" id="bd-theme" type="button">
                <i class="bi bi-arrow-return-left"></i>
            </a>
        </h1>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Claro
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Oscuro
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Automatico
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="./assets/img/logo-bellavista.png" alt="" width="250"
                    height="250" />
                <h1 style="font-weight: bold">
                    REGISTROS DE INSPECCION DE VEHICULOS
                </h1>
                <p>Responsable SST:</p>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <form class="needs-validation">
                        <div class="row">
                            <h3 class="mb-1">Registros</h3>
                            <hr class="my-4" />
                            <div class="col-md-12">
                                <table class="table text-center table table-bordered">
                                    <thead>
                                        <tr>
                                            <td id="titulo" scope="col">Identificador</td>
                                            <td id="titulo" scope="col">Fecha</td>
                                            <td id="titulo" scope="col">Conductor</td>
                                            <td id="titulo" scope="col">Placa del Vehiculo</td>
                                            <td id="titulo" scope="col">Ver</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($fila as $datos){
                                          
                                        ?>
                                        <tr>
                                            <td><?php echo $datos['idInspecciones']?></td>
                                            <td><?php echo $datos['fecha']?></td>
                                            <td><?php echo $datos['nombres']." ".$datos['apellidos']?></td>
                                            <td><?php echo $datos['placa']?></td>
                                            <td>
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal<?php echo $datos['idInspecciones']?>"
                                                    style="background-color: #a54f03;border-color: #a54f03"
                                                    type="button" class="btn btn-primary">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal<?php echo $datos['idInspecciones']?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" style="font-weight: bold;" id="
                                                            exampleModalLabel">
                                                            Reporte
                                                            #<?php echo $datos['idInspecciones']  ?>
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <h4 class="mb-1">1. Fecha de Reporte</h4>
                                                            <div class="col-12">
                                                                <label for="fecha" class="form-label">Fecha</label>
                                                                <input type="date" class="form-control" id="fecha"
                                                                    name="fecha" disabled value=<?php 
                                                                echo $datos['fecha'] ?> />
                                                            </div>
                                                            <hr class="my-4 mt-4" />
                                                            <h4 class="mb-1">2. Datos del Conductor</h4>
                                                            <div class="col-12">
                                                                <label for="nombres" class="form-label">Nombres y
                                                                    Apellidos:
                                                                </label>
                                                                <input type="text" class="form-control" disabled
                                                                    id="nombres" name="nombres" placeholder="" value="<?php 
                                                                echo $datos['nombres']." ".$datos['apellidos'] ?>" />
                                                            </div>
                                                            <hr class="my-4 mt-4" />
                                                            <h4 class="mb-1">3. Datos del Vehiculo</h4>
                                                            <div class="col-md-4">
                                                                <label for="modelo" class="form-label">Modelo</label>
                                                                <input type="text" class="form-control" id="modelo"
                                                                    name="modelo" placeholder="" value="<?php 
                                                                echo $datos['modelo']?>" disabled />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="placa" class="form-label">Placa</label>
                                                                <input type="text" class="form-control" id="placa"
                                                                    name="placa" placeholder="" value="<?php 
                                                                echo $datos['placa']?>" disabled />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="kilometraje"
                                                                    class="form-label">Kilometraje</label>
                                                                <input type="number" class="form-control"
                                                                    id="kilometraje" name="kilometraje" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['kilometraje']?>" disabled />
                                                            </div>
                                                            <hr class="my-4 mt-4" />
                                                            <h4 class="mb-1">3. Datos de Inspeccion</h4>
                                                            <label for="modelo" class="form-label">Llantas</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['llantas']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserllantas']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Frenos</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['frenos']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserfrenos']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Luces</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['luces']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserluces']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Liquidos</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['liquidos']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserliquidos']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Bateria</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['bateria']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="placa"
                                                                    name="placa" placeholder="" value="<?php 
                                                                echo $datos['obserbateria']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Cinturones</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['cinturones']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obsercinturones']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Espejos</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['espejos']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserespejos']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Kit de
                                                                Carretera</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['kit']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obserkit']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Combustible</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['combustible']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php 
                                                                echo $datos['obsercombustible']?>" disabled />
                                                            </div>
                                                            <label for="modelo" class="form-label">Documentos</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="placa"
                                                                    name="placa" placeholder="" value="<?php 
                                                                echo $datos['documentos']?>" disabled />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="placa"
                                                                    name="placa" placeholder="" value="<?php 
                                                                echo $datos['obserdocumentos']?>" disabled />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">&copy; 2024 Juan Jose Rincon Gomez</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="checkout.js"></script>
</body>

</html>