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


        <!-- Form -->
        <div class="col-12 p-2">
            <div class="card shadow my-3 p-3">
                <h3 class="text-primary mb-2">Calendario de Eventos</h3>
                <br>
                <div class="d-flex">
                    <div class="form-group col-6">
                        <label for="mes" class="mb-1">Mes:</label>

                        <select name="mes" class="opcion">
                            <option value="">Elige una opción</option>
                            <option value=" Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="mes" class="mb-1">Año:</label>

                        <select name="mes" class="opcion">
                            <option value="">Elige una opción</option>
                            <option value=" Enero">2020</option>
                            <option value="Febrero">2021</option>
                            <option value="Marzo">2022</option>
                            <option value="Abril">2023</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 p-2">
            <div class="card shadow mb-4">
                <div class="d-flex">
                    <div class="w-35 p-2 bg-primary text-white text-center">
                        <h2 class="fs-2 fw-bold">16</h2>
                        <span class="fs-6">Septiembre 2023</span>
                        <h5 class="fs-6">19:00:00</h5>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center justify-content-center text-muted">
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="d-flex">
                    <div class="w-35 p-2 bg-primary text-white text-center">
                        <h2 class="fs-2 fw-bold">16</h2>
                        <span class="fs-6">Septiembre 2023</span>
                        <h5 class="fs-6">19:00:00</h5>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center justify-content-center text-muted">
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="d-flex">
                    <div class="w-35 p-2 bg-primary text-white text-center">
                        <h2 class="fs-2 fw-bold">16</h2>
                        <span class="fs-6">Septiembre 2023</span>
                        <h5 class="fs-6">19:00:00</h5>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center justify-content-center text-muted">
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                        <span class="fw-bold">Ceremonia del 16 de septimbre</span>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <?php
    include_once('../templates/scripts.php');
    ?>
</body>

</html>