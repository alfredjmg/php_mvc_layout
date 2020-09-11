<!DOCTYPE html>
<html lang="es">
<head>
    <title>Computación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/lista.css" />
<!--Fuente de google-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<div class="container mt-4 mb-4 pt-4 pb-4 pr-5 pl-5 rounded-4">
    <h1>Herramientas</h1>


    <div class="well well-sm mb-4 text-right">
        <a class="btn btn-success" href="?c=Persona&a=Crear">Agregar Herramienta</a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th >Nombre de herramienta</th>
                <th>Condicion de uso</th>
                <th>Condicion de mantenimiento</th>
                <th >Fecha de adquisicion</th>
                <th >Fecha de Falla</th>
                <th >Descripcion de Falla</th>
                <th ></th>
                <th ></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->cond_uso; ?></td>
                <td><?php echo $r->cond_mant; ?></td>
                <td><?php echo $r->fecha_adq; ?></td>
                <td><?php echo $r->fecha_falla; ?></td>
                <td><?php echo $r->desc_falla; ?></td>
                <td>
                    <a class="btn btn-info" href="?c=Persona&a=Editar&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="?c=Persona&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <?php print_r($this->model->Listar()) ?> -->
</div>

<!-- JavaScript -->
<!-- Primero jQuery, luego Popper.js, luego Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>