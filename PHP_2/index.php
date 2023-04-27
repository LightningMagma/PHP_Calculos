<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <ul>
        <li>1. Nombre</li>
        <li>2. Suma</li>
        <li>3. Resta</li>
        <li>4. Multiplicación</li>
        <li>5. División</li>
    </ul>
    <form action="" method="post">
        <input type="number" name="opt">
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
<?php
$opt=$_POST["opt"];

switch ($opt) {
    case '1':
        header( 'Location: formulario.php' ) ;
        break;
    case '2':
        header( 'Location: suma.php' ) ;
        break;
    case '3':
        header( 'Location: resta.php' ) ;
        break;
    case '4':
        header( 'Location: multi.php' ) ;
        break;
    case '5':
        header( 'Location: divi.php' ) ;
        break;
    default:
        echo "Ingrese una opción válida";
        break;
}

echo "<h2>".$opt."</h2>";