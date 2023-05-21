<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Alumnos_Informática</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Alumnos de Informática</h1>
        <div class="row justify-content-center">
            <form action="/Alumnos_informática/controladores/alumnos/guardar.php" method = "POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_nombres">Nombres del alumno</label>
                        <input type="text" name="alum_nombres" id="alum_nombres" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_apellidos">Apellidos del alumno</label>
                        <input type="text" name="alum_apellidos" id="alum_apellidos" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col">
                        <label for="alum_fecha_nac">Fecha de Nacimiento</label>
                        <input type="date" name="alum_fecha_nac" id="alum_fecha_nac" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_tel">Telefono</label>
                        <input type="number" name="alum_tel" id="alum_tel" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_correo">Correo Electrónico</label>
                        <input type="text" name="alum_correo" id="alum_correo" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>