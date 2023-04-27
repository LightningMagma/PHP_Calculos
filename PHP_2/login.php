<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="style.css">
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
                        <h2>Inicio de sesión</h2>
                        <form action="" method="post">
                            <div class="input">
                                <input type="text" name="Usuario" pattern="^[A-Za-z]{3,30}$" title="No debe usar caracteres especiales" required placeholder="Usuario" oninput="this.value = this.value.replace(/[^A-Za-z0-9]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                            <div class="input">
                                <input type="password" name="Contrasena" pattern="^[A-Za-z0-9*/_.,]{3,30}$" required placeholder="Contraseña">
                            </div>
                            <div class="input">
                                <input type="submit" value="Ingresar">
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