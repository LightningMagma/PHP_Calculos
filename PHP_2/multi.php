<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación</title>
</head>
<body>
<form action="" method="post">
        <label for="numero1">Ingrese el primer número que desea multiplicar</label>
        <input type="number" name="numero1" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"></br>
        <label for="numero2">Ingrese el segundo número que desea multiplicar</label>
        <input type="number" name="numero2" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
        <input type="submit" value="Multiplicar">
        <input type="reset" value="Limpiar">
    </form>
    <?php
    $numero1=$_REQUEST['numero1'];
    $numero2=$_REQUEST['numero2'];
    $resultado=$numero1*$numero2;
    echo $numero1." * ".$numero2." = ".$resultado;
    ?>
</body>
</html>