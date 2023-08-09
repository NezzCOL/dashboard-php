<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard | Cambiar Comtraseña</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container mt-5">

        <h2 class="title text-center">Cambiar Contraseña</h2>

        <form class="row border p-3 justify-content-center" action="../index.php" method="post">
                
            <div class="col-lg-5 col-sm-5">
                <input class="form-control mt-3 text-center" type="password" placeholder="Ingrese su contraseña actual" required name="pass">

                <input class="form-control mt-3 text-center" type="password" placeholder="Ingrese una nueva contraseña" required name="pass">

                <input class="form-control mt-3 text-center" type="password" placeholder="Confirmer la nueva contraseña" required name="pass">
            </div>
        </form>
    </div>
</body>
</html>