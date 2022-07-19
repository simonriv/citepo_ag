<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/index.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Registro Citepo</title>
</head>

<section>



    <form class="row g-3" id="form">

        <!-- <div class="col-md-12">
            <h2>Formulario de Registro</h2>
            <p>le agradecemos por su interés en participar en nuestra conferencia. complete nuestro formulario de registro para recibir su certificado de participante </p>

        </div> -->

        <div class="col-md-6">
            <label for="Name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Name" name="name" placeholder="Ingrese los  Nombres " required>
        </div>
        <div class="col-md-6">
            <label for="LastName" class="form-label">Apellido </label>
            <input type="text" class="form-control" id="LastName" name="apellido" placeholder="Ingrese los Apellidos " required>
        </div>
        <div class="col-md-12">
            <label for="Emai" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="Email" name="email" placeholder="Ingrese el correo electronico " required>
        </div>
        <div class="col-md-12">
            <label for="ID" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="DateBirth" name="DateBirth" placeholder="Ingrese la fecha de nacimiento " required>
        </div>
        <div class="col-md-12">
            <label for="ID" class="form-label">Numero de Identificación</label>
            <input type="number" class="form-control" id="ID" name="id" placeholder="Ingrese el numero de identificacion" required>
        </div>


        <div class="col-12">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="phone" name="tel" placeholder="Ingrese el numero de Telefono " required>
        </div>
        <div class="col-12">
            <label for="countries" class="form-label">Pais</label>
            <input type="text" class="form-control" id="countries" name="countries" placeholder="Ingrese el pais " required>

        </div>
        <div class="col-12">
            <label for="Province" class="form-label">Provincia/Estado/Departamento</label>
            <input type="text" class="form-control" id="Province" name="Province" placeholder="Ingrese la Provincia/Estado/Departamento " required>

        </div>
        <div class="col-12">
            <label for="city" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Ingrese la Ciudad " required>

        </div>


        <div class="col-12">
            <label for="occupation" class="form-label">Ocupación:</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input " id="validationFormCheck2" name="radio-tecnico" required>
                <label class="form-check-label" for="validationFormCheck2">Técnico</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input  " id="validationFormCheck3" name="radio-notecnico" required>
                <label class="form-check-label" for="validationFormCheck3">No soy Técnico</label>
                <div id="msg"></div>


            </div>
        </div>



        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="btn">Registrar</button>
        </div>
    </form>

</section>


</body>
<script src="./resources/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="./app/js/index.js"></script>
</html>