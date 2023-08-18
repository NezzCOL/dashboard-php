<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?php include('../comunes/title.php');?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        <?php include('../comunes/navbar.php');?>

            <?php include('../comunes/sidebar.php');?>

            <div id="layoutSidenav_content">

                <div class="container mt-3">

                    <h2 class="title text-center">Administrar usuarios</h2>

                    <div class="">

                        <form class="row border p-3" action="../php/registro.php" method="post">

                            
                            <div class="col-lg-6 col-sm-6">
                                <select name="tip_doc" class="form-control" required>
                                    <option value="" disabled selected>Seleccione su tipo de documento</option>
                                    <option value="Cédula de ciudadania">Cédula de ciudadania</option>
                                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                    <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>
                                    <option value="Permiso por protección temporal">Permiso por protección temporal</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="number" placeholder="Número de documento" required name="num_doc">
                            </div>

                            <div class="col-lg-6 col-sm-6 mt-3">
                                <input class="form-control" type="text" placeholder="Ingrese su(s) nombre" required name="nombre">
                            </div>        

                            <div class="col-lg-6 col-sm-6 mt-3">
                                <input class="form-control" type="text" placeholder="Ingrese sus apellidos" required name="apellido">
                            </div>  
                            
                            <div class="col-lg-6 col-sm-6 mt-3">
                                <input class="form-control" type="email" placeholder="Ingrese su correo" required name="correo">
                            </div> 

                            <div class="col-lg-6 col-sm-6 mt-3">
                                <input class="form-control" type="number" placeholder="Ingrese un numero de telefono" required name="telefono">
                            </div> 
                             
                            <div class="col-lg-6 col-sm-6 mt-3">
                                <input name="contraseña" type="password" class="form-control" required placeholder="Ingrese una contraseña">
                            </div>

                            <div class="col-lg-6 col-sm-6 mt-3">
                                <select name="tip_rol" class="form-control" required>
                                    <option value="" disabled selected>Seleccione un rol</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Usuario">Usuario</option>
                                </select>
                            </div> 


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="registrar">Registrar usuario</button>
                            </div>

                        </form>

                    </div>

                    <div class="card mb-4 mt-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Usuarios Registrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tipo de documento</th>
                                            <th>Número de documento</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>correo</th>
                                            <th>Teléfono</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        include('../Login/db.php');
                                        $sql = $conexion -> query("SELECT * FROM asistencias");
                                        while ($datos = $sql -> fetch_object()) {
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $datos->id?></td>
                                                    <td><?php echo $datos->documento ?></td>
                                                    <td><?php echo $datos->numero_documento ?></td>
                                                    <td><?php echo $datos->nombre ?></td>
                                                    <td><?php echo $datos->apellido ?></td>
                                                    <td><?php echo $datos->correo ?></td>
                                                    <td><?php echo $datos->telefono ?></td>
                                                    <td><?php echo $datos->Rol?></td>
                                                    <td>
                                                        <button href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        <button href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <?php
                        include('../php/registro.php');
                    ?>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
