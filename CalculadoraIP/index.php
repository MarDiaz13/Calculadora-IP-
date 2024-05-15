<!DOCTYPE html>
<html>
<head>
    <title>IPMaster - Calculadora IP</title>
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
            margin: 0 auto;
            background-color: #000;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #fff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150px;
            height: auto;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .buttons a {
            text-decoration: none;
            color: #fff;
            margin-left: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            border: 1px solid #fff;
        }
        .buttons a:hover {
            background-color: #fff;
            color: #000;
        }
        a.button-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        a.button-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .description {
            text-align: right;
            margin-right: 50px;
            width: 250px;
            height: 50px;
            color: #ccc;
        }
        .company-logo {
            float: right;
        }
        .company-logo img {
            width: 100px;
            margin-right: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="logoipn.png" alt="Logo 1">
            <img src="logoescom.png" alt="Logo 2">
        </div>
        <div class="buttons">
            <a href="Ayuda.php">Ayuda</a>
            <a href="Conocenos.php">Conócenos</a>
            <a href="login.php" class="button-primary"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
            <a href="crearcuenta.php" class="button-primary">Crea tu cuenta</a>
        </div>
    </div>
    <div class="container">
        <h1>Bienvenido a IPMaster</h1>
        
            <img src="pagina.png" alt="Company Logo" class="company-logo" >
        <p> IPMaster: Convierte la complejidad de las direcciones IP en simple aritmética</p>
        <br>
        <br>
        <p> IPMaster es tu aliado para manejar direcciones IP de manera fácil y eficiente. Convierte números confusos en simples cálculos, facilitando la gestión y configuración de redes.</p>
    </div>
    
</body>
</html>
