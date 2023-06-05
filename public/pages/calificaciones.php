<?php
include_once('../templates/header.php');
?>

<body class="bg-light">
    <div class="container-fluid p-0">

        <?php
        //! Sidebar-Menú
        include_once('../templates/sidebar.php');
        ?>


        <!-- Cabeza -->
        <div class="d-flex align-items-center justify-content-between py-3 bg-primary text-white">
            <img class="rounded-circle mb-2 mx-2" src="https://admin.aplicacionescolar.net//images/1620852494.png" alt="" srcset="" width="40">
            <h2 class="p-2 text-center w-100">Carmen</h2>
            <div class="dropdown pb-2 px-0 m-0">
                <a class="btn text-white" id="configuracionHijos" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-gear text-white"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="configuracionHijos">
                    <h6 class="text-center text-primary fw-bold">Hijos</h6>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="text-muted">Hijo 1</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="text-muted">Hijo 1</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="text-muted">Hijo 1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Card  -->
        <div class="col-12 p-2">
            <!-- Header -->
            <div class="card shadow mb-4 p-2">
                <h3 class="text-primary pt-2 px-2">Calificaciones</h3>
            </div>

            <!-- Data -->
            <div class="card shadow mb-4">
                <section class="d-flex align-items">
                    <div class="w-35 text-center p-2">
                        <img class="shadow-lg bg-body rounded bg-transparent rounded-circle my-3" src="../assets/img/perfil.png" alt="" width="85">
                    </div>
                    <div class="w-100 p-2">
                        <div class="row mt-2 pb-1">
                            <span class="text-dark fw-bold d-block text-sm-l pb-1">
                                Ciclo Escolar
                            </span>
                            <span class="text-secondary text-sm">2022 - 2023</span>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4">
                                <span class="text-dark fw-bold d-block text-sm-l text-capitalize">
                                    Nivel
                                </span>
                                <span class="text-secondary text-sm text-capitalize">Primaria</span>
                            </div>
                            <div class="col-4">
                                <span class="text-dark fw-bold d-block text-sm-l text-capitalize">
                                    Grado
                                </span>
                                <span class="text-secondary text-sm text-capitalize">segundo</span>
                            </div>
                            <div class="col-4">
                                <span class="text-dark fw-bold d-block text-sm-l text-capitalize">
                                    Grupo
                                </span>
                                <span class="text-secondary text-sm text-capitalize">a</span>
                            </div>
                        </div>
                        <div class="row mb-3 text-center px-5">
                            <button type="button" class="btn btn-outline-success text-sm shadow">
                                <i class="fa-regular fa-file-pdf"></i> Reporte PDF
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>


    </div>





    <?php
    include_once('../templates/scripts.php');
    ?>
</body>

</html>