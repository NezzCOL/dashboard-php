<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../comunes/title.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../Login/styles.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
    <body class="sb-nav-fixed">
        <?php include('../comunes/navbar.php') ?>
        <?php include('../comunes/sidebar.php') ?>

        <div id="layoutSidenav_content">

            <div class="container mt-5">

                <h2 class="title text-center">Administrar usuarios</h2>

                <div class="">

                    <form class="row border p-3 mt-3" action="../php/registro.php" method="post">

                        <div class="col-lg-4 col-sm-4 mt-4">
                            <select name="Nom-program" class="form-control" required>
                                <option value="" disabled selected>Nombre del programa</option>
                                <option value="Cédula de ciudadania">Cédula de ciudadania</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>
                                <option value="Permiso por protección temporal">Permiso por protección temporal</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-4 mt-4">
                            <input class="form-control" type="number" placeholder="Estado del programa" required name="estado">
                        </div>

                        <div class="col-lg-4 col-sm-4 mt-4">
                            <input class="form-control" type="text" placeholder="Fichas activas" required name="ficha">
                        </div>        

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary mt-3" name="registrar">Registrar usuario</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>