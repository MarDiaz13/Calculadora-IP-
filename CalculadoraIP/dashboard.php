<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - IPMaster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            font-size: 20px;
            margin: 50px auto;
        }
        h1 {
            margin-bottom: 30px;
        }
        .button-container {
            display: flex;
            font-size: 20px;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a IP Master </h1>
         <h1>Selecciona la opcion que desee de nuestro menu  </h1>
        <div class="button-container">
            <a href="CalculadoraIP.php"><button>Calculadora IP</button></a>
            <a href="binario.php"><button>Calculadora binaria</button></a>
            <a href="conversion.php"><button>Conversion de decimales a binarios</button></a>
            <a href="Informacion.php"><button>Informacion</button></a>
            <a href="Ayuda2.php"><button>Ayuda</button></a>
        </div>
    </div>
</body>
</head>
<body>
    <h1>Cerrar sesión</h1>
    <!-- Botón de Cerrar Sesión -->
    <form action="index.php" method="post">
        <input type="hidden" name="logout" value="true">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>
</html>
