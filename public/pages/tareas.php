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
                    <h4 class="text-primary px-2">Tareas</h4>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <a href="#" class="rounded-pill shadow p-1 text-sm text-warning mx-1 border border-warning">
                        <i class="fa-regular fa-circle-check"></i>
                        <span>Pendiente</span>
                    </a>
                    <a href="#" class="rounded-pill shadow p-1 text-sm text-success mx-1 border border-success">
                        <i class="fa-regular fa-circle-check"></i>
                        <span>Enviado</span>
                    </a>
                    <a href="#" class="rounded-pill shadow p-1 text-sm text-primary mx-1 border border-primary">
                        <i class="fa-regular fa-circle-check"></i>
                        <span>Revisado</span>
                    </a>
                    <a href="#" class="rounded-pill shadow p-1 text-sm text-danger mx-1 border border-danger">
                        <i class="fa-regular fa-circle-check"></i>
                        <span>Obs.</span>
                    </a>
                </div>
            </div>
            <!-- Data -->
            <div class="card shadow mb-4 p-2">
                <section class="border-start border-2 border-success px-2">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1">
                        <h5 class="text-primary">Ciencias Naturales</h5>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            2022-03-14 11:30:59
                        </span>
                    </div>

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios enviados
                        </span>
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios pendientes
                        </span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Archivos Adjuntos:</h6>
                        <span class="text-sm text-secondary">Archivo.pdf</span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Links:</h6>
                        <a href="http://ww.google.com" class="text-sm">aplicaciones.com</a>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <div class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-circle-down"></i>
                                <span>Descargar</span>
                            </div>
                            <div class="rounded-pill shadow p-2 text-sm text-primary mx-1 border border-primary">
                                <i class="fa-solid fa-upload"></i>
                                <span>Subir</span>
                            </div>
                        </div>

                        <div class="fs-2">
                            <div class="rounded-pill shadow p-2 text-sm text-warning mx-1 bg-warning text-white">
                                <i class="fa-regular fa-circle-check"></i>
                                <span>Pendiente</span>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

            <div class="card shadow mb-4 p-2">
                <section class="border-start border-2 border-danger px-2">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1">
                        <h5 class="text-primary">Historia</h5>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            2022-03-14 11:30:59
                        </span>
                    </div>

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios enviados
                        </span>
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios pendientes
                        </span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Archivos Adjuntos:</h6>
                        <span class="text-sm text-secondary">Archivo.pdf</span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Links:</h6>
                        <a href="http://ww.google.com" class="text-sm">aplicaciones.com</a>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <a href="#" class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-circle-down"></i>
                                <span>Descargar</span>
                            </a>
                            <a href="#" class="rounded-pill shadow p-2 text-sm text-primary mx-1 border border-primary">
                                <i class="fa-solid fa-upload"></i>
                                <span>Subir</span>
                            </a>
                        </div>

                        <div class="fs-2">
                            <div class="rounded-pill shadow p-2 text-sm text-danger mx-1 bg-danger text-white">
                                <i class="fa-regular fa-circle-check"></i>
                                <span>Observación</span>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

            <div class="card shadow mb-4 p-2">
                <section class="border-start border-2 border-primary px-2">
                    <div class=" d-flex align-items-center justify-content-between pt-2 px-1">
                        <h5 class="text-primary">Física</h5>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            2022-03-14 11:30:59
                        </span>
                    </div>

                    <div class="p-2">
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios enviados
                        </span>
                        <span class="text-dark d-block text-sm text-capitalize pb-2">
                            realizar los ejercicios pendientes
                        </span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Archivos Adjuntos:</h6>
                        <span class="text-sm text-secondary">Archivo.pdf</span>
                    </div>

                    <div class="p-2">
                        <h6 class="text-dark">Links:</h6>
                        <a href="http://ww.google.com" class="text-sm">aplicaciones.com</a>
                    </div>

                    <div class="p-2 d-flex mb-2 justify-content-between">

                        <div class="d-flex">
                            <a href="#" class="rounded-pill shadow p-2 text-sm text-success mx-1 border border-success">
                                <i class="fa-regular fa-circle-down"></i>
                                <span>Descargar</span>
                            </a>
                            <a href="#" class="rounded-pill shadow p-2 text-sm text-primary mx-1 border border-primary">
                                <i class="fa-solid fa-upload"></i>
                                <span>Subir</span>
                            </a>
                        </div>

                        <div class="fs-2">
                            <div class="rounded-pill shadow p-2 text-sm text-primary mx-1 bg-primary text-white">
                                <i class="fa-regular fa-circle-check"></i>
                                <span>Revisado</span>
                            </div>
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