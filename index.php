<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/index.css" type="text/css">

    <title>Registro Citepo</title>
</head>

<body>

    <section>

        <form class="row g-3" id="form">
            <div class="col-md-6">
                <label for="Name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Ingrese los  Nombres ">
            </div>
            <div class="col-md-6">
                <label for="LastName" class="form-label">Apellido </label>
                <input type="text" class="form-control" id="LastName" name="apellido" placeholder="Ingrese los Apellidos ">
            </div>
            <div class="col-md-12">
                <label for="Emai" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="Email" name="email" placeholder="Ingrese el correo electronico ">
            </div>
            <div class="col-md-12">
                <label for="ID" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" id="DateBirth" name="DateBirth" placeholder="Ingrese la fecha de nacimiento ">
            </div>
            <div class="col-md-12">
                <label for="ID" class="form-label">Numero de Identificación</label>
                <input type="number" class="form-control" id="ID" name="id" placeholder="Ingrese el numero de identificacion">
            </div>


            <div class="col-12">
                <label for="phone" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="phone" name="tel" placeholder="Ingrese el numero de Telefono ">
            </div>
            <div class="col-12">
                <label for="countries" class="form-label">Pais</label>
                <select class="form-select form-select-sm" id="countries" name="countries aria-label=">
                   
                   
                </select>

            </div>
            <div class="col-12">
                <label for="occupation" class="form-label">Ocupación:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input " id="validationFormCheck2" name="radio-tecnico"  required>
                    <label class="form-check-label" for="validationFormCheck2">Técnico</label>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input  " id="validationFormCheck3"   name="radio-notecnico"   required>
                    <label class="form-check-label" for="validationFormCheck3">No soy Técnico</label>
                    <div id="msg" ></div>
                    

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

</html>