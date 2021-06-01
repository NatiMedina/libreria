<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
</head>
<body>
    <h1>Iniciar sesion</h1>
    <form action="datos" method="post" style="width: 100px">
         @csrf
        <input type="text" placeholder="ingresar nombre" name="nombre">
        <input type="text" placeholder="ingresar dni" name="dni" style="margin-top: 5px">
        <button type="submit" style="margin-top: 5px; padding: 4px ; background-color:dodgerBlue">enviar</button>
    </form>
</body>
</html>