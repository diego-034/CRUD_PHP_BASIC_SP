<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/main.js"></script> 
    <script>window.jQuery || document.write("</script><script src='js/libs/jquery-3.4.1.min.js'>\x3C/script>")</script> 


    <title>Prueba</title>
</head>

<body>
    <div class="container">
        <br>
        <h1 class="text-center font-weight-bold">CRUD</h1>
        <hr>
    </div>

    <div class="container-sm">
<form action="Logica/export.php" method="POST">
<center><button type="submit" class="btn btn-primary" name="exportar" >Exportar Registros en excel</button>
</center>
</form>

        <form action="Logica/insert.php" id="form" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Razón Social</label>
                    <input type="text" class="form-control" name="idRazonSocial">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputState">Tipo de Documento</label>
                    <select id="idIdDocumento" name="idIdDocumento" class="form-control">
                        <option selected value="C.C.">C.C</option>
                        <option value="T.I.">T.I</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="NIT">NIT</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero de Documento</label>
                    <input type="number" class="form-control" name="idNDocumento">
                </div>
                <div class="form-group col-md-6">
                    <label>Telefono</label>
                    <input type="number" class="form-control" name="idTelefono">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Celular</label>
                    <input type="number" class="form-control" name="idCelular">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="idCorreo">
                </div>
            </div>
            <div class="form-row">
                <label class="mr-5">Tipo de Persona</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idTPersona" id="idTPersona" value="Juridica">
                    <label class="form-check-label" for="inlineRadio1">Juridica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idTPersona" id="idTPersona" value="Natural">
                    <label class="form-check-label" for="inlineRadio2">Natural</label>
                </div>
            </div>
            <div class="form-row">
                <label class="mr-5">¿Está activo?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="idActivo" id="idActivo" value="si">
                    <label class="form-check-label" for="inlineCheckbox1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="idActivo" id="idActivo" value="no">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success" name="btnAgregar">Agregar</button>
        </form>
        <!-- formulario actualizar-->
        <form action="Logica/update.php" id="formi" style="display: none" method="POST">
            <div class="form-row">
            <div class="form-group col-md-1">
                    <label>Id</label>
                    <input type="text" class="form-control" id="idIdEmpresa2" name="idIdEmpresa2" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label>Razon social</label>
                    <input type="text" class="form-control" name="idRazonSocial2" id="idRazonSocial2">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputState">Tipo de Documento</label>
                    <select name="idIdDocumento2" id="idIdDocumento2" class="form-control">
                        <option value="C.C.">C.C</option>
                        <option value="T.I.">T.I</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="NIT">NIT</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero de Documento</label>
                    <input type="number" class="form-control" name="idNDocumento2" id="idNDocumento2">
                </div>
                <div class="form-group col-md-6">
                    <label>Telefono</label>
                    <input type="number" class="form-control" name="idTelefono2" id="idTelefono2">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Celular</label>
                    <input type="number" class="form-control" name="idCelular2" id="idCelular2">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="idCorreo2" id="idCorreo2">
                </div>
            </div>
            <div class="form-row">
                <label class="mr-5">Tipo de Persona</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idTPersona2" id="idTPersona2" value="Juridica">
                    <label class="form-check-label" for="inlineRadio1">Juridica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idTPersona2" id="idTPersona2" value="Natural">
                    <label class="form-check-label" for="inlineRadio2">Natural</label>
                </div>
            </div>
            <div class="form-row">
                <label class="mr-5">¿Está activo?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="idActivo2" id="idActivo2" value="si">
                    <label class="form-check-label" for="inlineCheckbox1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="idActivo2" id="idActivo2" value="no">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="btnActualizar">Actualizar</button>
        </form>
        
    </div>
    <br>
    <div class="container-sm">
        <table class="table bg-secondary text-white ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Razon Social</th>
                    <th scope="col">Tipo de Documento</th>
                    <th scope="col">Numero de Documento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tipo de persona</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "Logica/conexion.php";
                $conexion = conexion();

                $sql = "CALL sp_mostrar_datos";
                $result = mysqli_query($conexion, $sql);
                ?>
                <?php
                while ($ver = mysqli_fetch_row($result)) :
                ?>
                    <tr>
                        <td class="raw"><?php echo $ver[0]; ?></td>
                        <td><?php echo $ver[1]; ?></td>
                        <td><?php echo $ver[2]; ?></td>
                        <td><?php echo $ver[3]; ?></td>
                        <td><?php echo $ver[4]; ?></td>
                        <td><?php echo $ver[5]; ?></td>
                        <td><?php echo $ver[6]; ?></td>
                        <td><?php echo $ver[7]; ?></td>
                        <td><?php echo $ver[8]; ?></td>
                        <td><?php echo $ver[9]; ?></td>
                        <td>
                            <span class="btn btn-raised btn-warning btn-xs" onclick="editDates('<?php echo $ver[0]; ?>')">
                                <span class="fa "></span> Editar
                            </span>
                            <button type="button" class="btn btn-danger" onclick="elegir('<?php echo $ver[0]; ?>')">Borrar</button>
                        </td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>