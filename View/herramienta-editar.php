<!DOCTYPE html>
<html lang="es">
<head>
    <title>Computación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/editar.css" />
<!--Fuente de google-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<!--Se establece el div contenedor donde ira el formulario-->
<div class="container mt-4 mb-4 pt-4 pb-4 pr-5 pl-5 rounded-4">
        <!--Cabeza de página-->
        <h1 class="page-header text-center">
            <p>Editar máquina-herramienta</p> 
        </h1>
        <!--Se pide la entrada de indeitificación del producto-->
        <form action="?c=Persona&a=Guardar" method="POST" enctype="multipart/form-data" id="Registro" class="mt-4">
            <div class="form-group" id="idmahe">
                <label for="mahe_id">Nombre de la máquina-herramienta</label>
                <input value="<?php echo $alm->nombre; ?>" name="nombre" type="text" class="form-control form-control-lg" id="nombre" placeholder="-- Nombre  del aparato a registrar --">
            </div>
        <!--Se crea una selección con sudivisiones escritas en JavaScript-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mahe_type">Tipo de máquina-herramienta</label>
                <select id="mahe_type" class="form-control">
                    <option value="">-- Seleccione el tipo de instrumento--</option>
                    <option value="1">Torno</option>
                    <option value="2">Fresadora</option>
                    <option value="3">Taladro</option>
                    <option value="4">Pulidora</option>
                </select>
            </div>
            <!--Cuadro de selección hecho en JavaScript-->
            <div class="form-group col-md-6" id="productSubTypeDiv">
            
            </div>
        </div>
            
            <!--Se pide fecha en la que el producto se adquirió-->
            <div class="form-group">
                <label for="date">Fecha de adquisición:</label>
                    <input value="<?php echo $alm->fecha_adq; ?>" type="date" name="fecha_adq" class="form-control" placeholder="Ingrese la fecha en la que se adquirió el instrumento" id="start" name="trip-start" value="" min="1980-01-01" max="2019-12-31">
            </div>
            <!--Se pide las condiciones del producto, segun su estado de uso-->
            <div class="form-group">
                <label for="inputState">Condición de uso del aparato:</label>
                    <select name="cond_mant" id="inputState" class="form-control">
                        <option>-- Seleccione la condición actual del aparato --</option>
                        <option <?php if($alm->cond_mant == 'Nuevo') echo 'selected' ?>>Nuevo</option>
                        <option <?php if($alm->cond_mant == 'Poco usado') echo 'selected' ?>>Poco usado</option>
                        <option <?php if($alm->cond_mant == 'Usado') echo 'selected' ?>>Usado</option>
                        <option <?php if($alm->cond_mant == 'Muy usado') echo 'selected' ?>>Muy usado</option>
                        <option <?php if($alm->cond_mant == 'Inhabilitado') echo 'selected' ?>>Inhabilitado</option>
                    </select>
            </div>
            <!--Se dan a elegir en radio, opciones para establecer si el producto esta en mantenimiento-->
            <div class="form-group">
                <div>
                    <label for="inputState">Condición de mantenimiento del aparato:</label>
                </div>
                <!--Cada opción representa un atributo de estado, segun la necesidad de mantenimiento del producto-->
                <div class="custom-control custom-radio">
                    <input <?php if($alm->cond_uso == 'Sin necesidad de mantenimiento') echo 'checked' ?>  value="Sin necesidad de mantenimiento" name="cond_uso" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label green" for="customRadio1">Sin necesidad de mantenimiento</label>
                </div>
                <div class="custom-control custom-radio">
                    <input <?php if($alm->cond_uso == 'Requiere mantenimiento preventivo') echo 'checked' ?> value="Requiere mantenimiento preventivo" name="cond_uso" type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label green" for="customRadio2">Requiere mantenimiento preventivo</label>
                </div>
                <div class="custom-control custom-radio">
                    <input <?php if($alm->cond_uso == 'Requiere mantenimiento correctivo') echo 'checked' ?> value="Requiere mantenimiento correctivo" name="cond_uso" type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label green" for="customRadio3">Requiere mantenimiento correctivo</label>
                </div>
                <div class="custom-control custom-radio">
                    <input <?php if($alm->cond_uso == 'Actualmente en mantenimiento') echo 'checked' ?> value="Actualmente en mantenimiento" name="cond_uso" type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label green" for="customRadio4">Actualmente en mantenimiento</label>
                </div>
                <div class="custom-control custom-radio">
                    <input <?php if($alm->cond_uso == 'No puede repararse') echo 'checked' ?> value="No puede repararse" name="cond_uso" type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label green" for="customRadio5">No puede repararse</label>
                </div>
            </div>
            <!--Se pide fecha en la que el producto se averió, en caso de estarlo-->
            <div class="form-group">
                <label for="date">Fecha de avería registrada:</label>
                    <input value="<?php echo $alm->fecha_falla; ?>" name="fecha_falla" type="date" name="fecha de falla" class="form-control" placeholder="Ingrese la fecha en la que falló el instrumento" id="start" name="trip-start" value="" min="1980-01-01" max="2019-12-31">
            </div>
            <!--Unido con la ultima casilla, se pide una descripción de la falla que pudiera presentar el producto-->
            <div class="form-group">
                <label for="productDescription">Descripción de avería registrada</label>
                <textarea name="desc_falla" class="form-control" id="productDescription" rows="4" placeholder="Describa brevemente la avería del aparato"><?php echo $alm->desc_falla; ?></textarea>
            </div>
            <!--Botón de registro que enviará los datos suministrados a la base de datos-->
            <button type="submit" class="btn btn-success" id="botreg" name="submit">Registrar</button>
            <a class="btn btn-primary" href="?c=Persona&a=Lista" role="button">Volver</a>
        </form> 
    </div>

    <!-- JavaScript -->
<!-- Primero jQuery, luego Popper.js, luego Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="assets/js/proyecto2.js"></script>

    </body>
</html>