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

        <!-- Contenido -->
        <div class="col-12 p-2">
            <!-- Header -->
            <div class="card shadow mb-4 p-1">
                <div class="d-flex pt-2">
                    <h4 class="text-primary px-2">Mensajes</h4>
                </div>
            </div>

            <!-- Card -->
            <div class="card shadow rounded mb-4 overflow-hidden">
                <!-- Card-Header -->
                <div class="bg-danger bg-gradient">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1 text-white">

                        <div class="d-flex flex-row px-1">
                            <i class="fa-regular fa-envelope"></i>
                            <h5 class="text-white mx-1 text-sm">Avisos</h5>
                        </div>

                        <div class="text-white pt-1">
                            <span class="text-white d-block text-capitalize pb-2 text-sm">
                                2022-03-14 11:30:59
                            </span>
                        </div>
                    </div>

                </div>

                <section class="border-start border-2 border-danger px-2">

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            Prueba N
                        </span>
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            Prueba N
                        </span>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <a class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-square-check"></i>
                                <span>Sí</span>
                            </a>
                            <a class="rounded-pill shadow p-2 text-sm text-danger mx-1 border border-danger">
                                <i class="fa-regular fa-circle-xmark"></i>
                                <span>No</span>
                            </a>
                        </div>

                    </div>

                </section>
            </div>

            <!-- Card -->
            <div class="card shadow rounded mb-4 overflow-hidden">
                <!-- Card-Header -->
                <div class="bg-primary bg-gradient">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1 text-white">

                        <div class="d-flex flex-row px-1">
                            <i class="fa-regular fa-clock"></i>
                            <h5 class="text-white mx-1 text-sm">Asistencias</h5>
                        </div>

                        <div class="text-white pt-1">
                            <span class="text-white d-block text-capitalize pb-2 text-sm">
                                2022-03-14 11:30:59
                            </span>
                        </div>
                    </div>

                </div>

                <section class="border-start border-2 border-primary px-2">

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            Carmen Rebollar García, Matricula: soporte123
                        </span>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <a class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-square-check"></i>
                                <span>Sí</span>
                            </a>
                            <a class="rounded-pill shadow p-2 text-sm text-danger mx-1 border border-danger">
                                <i class="fa-regular fa-circle-xmark"></i>
                                <span>No</span>
                            </a>
                        </div>

                    </div>

                </section>
            </div>

            <!-- Card -->
            <div class="card shadow rounded mb-4 overflow-hidden">
                <!-- Card-Header -->
                <div class="bg-success bg-gradient">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1 text-white">

                        <div class="d-flex flex-row px-1">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            <h5 class="text-white mx-1 text-sm">Cobranza</h5>
                        </div>

                        <div class="text-white pt-1">
                            <span class="text-white d-block text-capitalize pb-2 text-sm">
                                2022-03-14 11:30:59
                            </span>
                        </div>
                    </div>

                </div>

                <section class="border-start border-2 border-success px-2">

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            Realizar el pago del 1-5
                        </span>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <a class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-square-check"></i>
                                <span>Sí</span>
                            </a>
                            <a class="rounded-pill shadow p-2 text-sm text-danger mx-1 border border-danger">
                                <i class="fa-regular fa-circle-xmark"></i>
                                <span>No</span>
                            </a>
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