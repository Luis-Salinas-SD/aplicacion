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
                    <h4 class="text-primary">Seguimiento</h4>
                </div>
            </div>

            <!-- Data -->
            <div class="card shadow mb-4 p-1">
                <div class="d-flex align-items-center justify-content-between pt-2 px-1">
                    <h4 class="text-primary">Marzo</h4>
                    <span class="text-secondary d-block text-sm-l text-capitalize pb-2">
                        2022-03-14 11:30:59
                    </span>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <div class="text-center">
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Excelente
                        </span>
                        <div class="text-center shadow m-2 rounded-circle overflow-auto">
                            <img src="../assets/img/emoji.jpeg" alt="" srcset="" width="100">
                        </div>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Aseo
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Sigue así
                        </span>
                        <div class="text-center shadow m-2 rounded-circle overflow-auto">
                            <img src="../assets/img/emoji.jpeg" alt="" srcset="" width="100">
                        </div>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Puntualidad
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Tu puedes
                        </span>
                        <div class="text-center shadow m-2 rounded-circle overflow-auto">
                            <img src="../assets/img/emoji.jpeg" alt="" srcset="" width="100">
                        </div>
                        <span class="text-secondary d-block text-sm text-capitalize pb-2">
                            Orden
                        </span>
                    </div>
                </div>
                <div class="p-2">
                    <span class="text-secondary d-block text-sm text-capitalize pb-2">
                        observacion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt illo cum nesciunt veritatis voluptatum fugit dolore.
                    </span>
                </div>
            </div>
        </div>


    </div>





    <?php
    include_once('../templates/scripts.php');
    ?>
</body>

</html>