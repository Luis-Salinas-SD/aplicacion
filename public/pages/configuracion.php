<?php
include_once('../templates/header.php');
?>

<body class="fondo-config">
    <div class="container-fluid h-full">

        <?php
        //! Sidebar-Menú
        include_once('../templates/sidebar.php');
        ?>

        <!-- Cabeza -->
        <div class="bg-transparent d-flex align-items-center py-4">
            <button class="btn">
                <i class="fa-solid fa-arrow-left pb-2 text-white"></i>
            </button>
            <h2 class="p-2 text-center w-75 text-white">Configuración</h2>
        </div>

        <!-- Foto -->
        <div class="col-12">
            <div class="card mt-5">
                <div class="desborde">
                    <img class="shadow-lg bg-body rounded bg-transparent rounded-circle" src="../assets/img/perfil.png" alt="" srcset="" width="140">
                </div>

                <div class="desborde-l">
                    <h4>Carme Morales Pliego</h4>
                </div>

                <div class="desborde-l">
                    <span>correo@mail.com.mx</span>
                </div>
            </div>
        </div>

        <!-- Información -->
        <div class="col-12">
            <div class="card my-3 p-2">
                <h3 class="text-primary">Información de Escuela</h3>
                <div class="d-flex flex-column">
                    <span class="fw-bold">Nombre: <span class="fw-light">Luis Salinas</span></span>
                    <span class="fw-bold">Edad: <span class="fw-light">26</span></span>
                    <span class="fw-bold">Sexo: <span class="fw-light">Masculino</span></span>
                </div>
            </div>
        </div>

        <!-- Información -->
        <div class="col-12">
            <div class="card my-3 p-2">
                <h3 class="text-primary">Aplicación Escolar Web</h3>
                <div class="d-flex flex-column">
                    <span class="fw-bold">Nombre: <span class="fw-light">Luis Salinas</span></span>
                    <span class="fw-bold">Edad: <span class="fw-light">26</span></span>
                    <span class="fw-bold">Sexo: <span class="fw-light">Masculino</span></span>
                </div>
            </div>
        </div>

        <div class="py-2">
        </div>

    </div>





    <?php
    include_once('../templates/scripts.php');
    ?>
</body>

</html>