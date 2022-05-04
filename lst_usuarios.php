<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Usuarios ::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <main class="container">
        <p class="text-center fs-2">LISTADO DE LOS USUARIOS</p>
        <br><br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Cliente</th>
                    <th scope="col" class="text-center">User</th>
                    <th scope="col" class="text-center">Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once("listar.php");?>
                <?php foreach($usuarios as $usuario) {?>
                
                <tr>
                    <td class="text-center"><?php echo $usuario->IdUsuario?></td> 
                    <td class="text-center"><?php echo $usuario->Cliente?></td> 
                    <td class="text-center"><?php echo $usuario->Usser?></td> 
                    <td class="text-center"><a href="usuarios_detalle.php" class="btn btn-primary">Ver Detalle</a></td> 
                </tr>

                <?php   }?>
            </tbody>
        </table>
        <div>
            <a href="index.php" class="btn btn-success">Regresar</a>
        </div>
    </main>
</body>

</html>