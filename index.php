<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="stylos/style.css">
    <title>.:: LOGIN ::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body class="bg-idx">
    <main class="container pt-5" >
        <div class="container w-75 bg-white mt-5" style="border-radius: 55px;">
            <div class="row align-items-stretch">
                <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

                </div>
                <div class="col bg-white p-5 rounded-end">
                    <h2 class="fw-bold text-center py-5">BIENVENIDO</h2>
                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="user" class="form-label">User</label>
                            <input type="email" class="form-control" name="user" autocomplete="off">
                        </div>
                    </form>

                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="email" class="form-control" name="password" autocomplete="off">
                        </div>
                    </form>

                    <form action="" method="post">
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" name="connected">
                            <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>
                        <div class="d-grid">
                            <a class="btn btn-primary" href="home.php">Iniciar sesion</a>
                        </div>
                        <div class="my-3">
                            <span>¿No tiene cuenta?</span>
                            <a href="#">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>