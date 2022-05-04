<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>.:: Login 2 ::.</title>
    <link rel="stylesheet" href="./stylos/registro.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" id="update_id">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">
                    <h3 class="card-title"><i class="fas fa-user"></i>&nbsp;&nbsp;Mis Datos</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <!--Datos basicos-->
                    <div class="col-sm-6">

                        <h6><strong><i class="fas fa-box-open"></i>&nbsp;&nbsp;Datos Basicos: </strong></h6>
                        <div class="dropdown-divider mt-0 pt-0 pb-2"></div>

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" maxlength="150" size="50" class="form-control"
                                autocomplete="none" onkeyup="javascript:this.value=this.value.toUpperCase();" />
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" id="apellidos" maxlength="150" size="50" class="form-control"
                                autocomplete="none" onkeyup="javascript:this.value=this.value.toUpperCase();" />
                        </div>

                        <div class="form-group">
                            <label for="email">User:</label>
                            <input type="text" name="email" id="user" maxlength="120" size="50" class="form-control"
                                autocomplete="none" />
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" name="Contraseña" id="pass" maxlength="120" size="50" class="form-control"
                                autocomplete="none" />
                        </div>

                        <div class="form-group">
                            <label for="numerodoc">Documento de Identidad:</label>
                            <input type="text" name="numerodoc" id="dni" maxlength="8" size="8" class="form-control"
                                autocomplete="none" />
                        </div>

                        <div class="form-group">
                            <label for="fechanac">Fecha de Nacimiento:</label>
                            <input type="date" name="fechanac" id="fechanac" class="form-control" autocomplete="none" />
                        </div>

                    </div>

                    <!--Datos de contacto-->
                    <div class="col-sm-6">

                        <h6><strong><i class="fas fa-box-open"></i>&nbsp;&nbsp;Datos de Contacto: </strong></h6>
                        <div class="dropdown-divider mt-0 pt-0 pb-2"></div>

                        

                        <div class="form-group">
                            <label for="fechanac">Movil:</label>
                            <input type="text" name="movil" id="movil" maxlength="9" size="20" class="form-control"
                                autocomplete="none" />
                        </div>

                        <div class="form-group">
                            <label for="fechanac">Direccion:</label>
                            <input type="text" name="direccion" id="direccion" maxlength="300" size="180" class="form-control"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="none" />
                        </div>
                        
                        <div class="form-group">
                            <label for="fechanac">Perfil:</label>
                            <select class="form-select" id="perfil" aria-label="Default select example">
                                <option value="1">Cliente</option>
                                <option value="2">Proveedor</option>
                              </select>
                        </div>
                        
                        
                        <div class="d-grid gap-2">
                            <a type="button" value="Grabar" class="btn btn-success btnsaul" id="prc_usernew"> <i class="fas fa-save"></i>&nbsp;&nbsp;Grabar</a>
                        </div>

                        <div class="d-grid gap-2">
                            <a type="Button" class="btn btn-danger float-right btnsaul" style="margin-top: 0px;" href="login.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Cancelar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    &nbsp;
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8dce717948.js" crossorigin="anonymous"></script>
<script>
    $('')
</script>

</html>