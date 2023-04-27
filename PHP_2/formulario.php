<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Registro</title>
</head>
<body>
<section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div class="fondo" style="--i:0;"></div>
                <div class="fondo" style="--i:1;"></div>
                <div class="fondo" style="--i:2;"></div>
                <div class="fondo" style="--i:3;"></div>
                <div class="fondo" style="--i:4;"></div>
                <div class="fondo" style="--i:5;"></div>
                <div class="contenedor">
                    <div class="formulario">

                        <h2>Registro de persona</h2>
                        <form action="" method="post">
                            <div class="input">
                                <input type="text" name="nombre" pattern="^[A-Za-z]{3,30}$" title="Debe ingresar un nombre" required placeholder="Ingrese su nombre" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                            <div class="input">
                                <input type="email" name="correo" pattern="^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" title="Debe ingresar un correo electrónico" required placeholder="Ingrese su correo electrónico">
                            </div>
                            <div class="input">
                                <input type="number" name="telefono" pattern="^[0-9]{10,10}$" maxlength="10" title="Debe ingresar un número telefónico" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" required placeholder="Ingrese su teléfono">
                            </div>
                            <div class="input">
                                <input type="text" name="direccion" pattern="^[A-Za-z0-9#°- ]{10,10}$" title="No ingrese * / + _ ? u otros caracteres especiales" oninput="this.value = this.value.replace(/[^0-9A-Za-z#° ]/g, '').replace(/(\..*)\./g, '$1');" required placeholder="Ingrese su dirección" required placeholder="Ingrese su dirección">
                            </div>
                            <div class="input">
                                <input type="submit" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>Teléfono</td>
<td>Correo</td>
<td>Dirección</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$correo."</td>
<td>".$direccion."</td>
</tr>
</table>
";