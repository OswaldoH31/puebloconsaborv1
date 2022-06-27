<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        h2{
            color: #0b0b3b;
            font-family: 'Merienda', cursive;
            font-size: 20px;
        }
        h3{
            color: black;
            font-family:'Times New Roman', Times, serif;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Pueblo con Sabor</h2>

    <h2>Nombre:</h2><h3> {{$contacto['names']}}</h3>
    <h2>Telefono:</h2><h3> {{$contacto['telefono']}}</h3>
    <h2>Correo:</h2><h3> {{$contacto['email']}}</h3>
    <h2>Mensaje:</h2><h3> {{$contacto['mensaje']}}</h3>
</body>
</html>



