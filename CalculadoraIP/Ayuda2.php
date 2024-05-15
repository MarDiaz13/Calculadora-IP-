<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - Calculadora Binaria</title>
    <style>
        body {
            background-color: #000000; /* Fondo negro */
            font-size: 20px;
            color: #FFFFFF; /* Letras blancas */
            font-family: Arial, sans-serif;
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            padding: 20px; /* Añade un poco de espacio alrededor del contenido */
        }
        h1 {
            color: #00BFFF; /* Color azul claro para el título */
        }
        p {
            margin-bottom: 20px;
        }
         .imagen img {
            width: 100px;
            margin-right: 100px;
            height: 100px;
        }
   
    </style>
</head>
<body>
    <h1>Ayuda - Calculadora Binaria</h1>
    <br>
    <h1>Funcionamiento de calculadoras</h1>
    <br>
    <br>
    <p>Una vez ingreses a la pagina, se mostrara el menu de opciones de las diversas calculadoras que ofrecemos: </p>
      <img src="Menu.png" alt="Menu principal" class="imagen">
    <br>
    <p> Al dar click en el boton "Calculadora IP" se abrira la siguiente pagina:
       <img src="calculadora.png" alt="Calculadora IP" class="imagen"> 
    <p> Para realizar el calculo de una direccion IP necesitas ingresar el primer octeto de la direccion, en automatico el sistema
        reconocera la clase a al cual pertenece de acuerdo a las restricciones de IPv4 e IPv6: </p>
    <br>
    <p> Clasificacion de redes por intervalo del primer octeto</p>
    <p> A : 1 - 126 (son utilizadas para redes grandes)</p>
    <p> B : 128 - 191 (son utilizadas para redes medianas)</p>
    <p> C : 192 - 223 (son utilizadas para redes pequeñas)</p>
    <p> D : 224 - 239  (son usadas para IP multidifuaion)</p>
    <p> E : 240 - 255 (son usadas para experimental)</p>
    <br>
    <p> Posteriormente podras ingresar el 2do, 3ero y 4to octeto. Al mismo tiempo el sistema te dira cuantos octetos de la mascara de subred puedes utilizar sin generar afectaciones (se debe ingresar el valor de los octetos de la submascara de red) </p>
    <img src="calculadora2.png" alt="Calculadora IP" class="imagen"> 
    <p> Una vez ingresados todos los valores debes de dar click en el boton de calcular</p>
    <img src="calculadora3.png" alt="Calculadora IP" class="imagen"> 
    <p> De esta manera se mostraran los calculos de: </p>
    <p> - Broadcast </p>
    <p> - Host minimo </p>
    <p> - Host maximo </p>
    <br>
    <p>Importante: Al escribir los octetos de la submascata de red es indispensable que sean separados por un punto (.) ya que si solo se separan por un espacio habra errores en los calculos como se muestra a continuacion:</p>
    <img src="calculadora4.png" alt="Calculadora IP" class="imagen"> 
    <br>
    <p> Al dar click en el boton "Calculadora binaria"</p>
    <br>
    <p> Al dar click en el boton de "Conversion de decimales a binarios" </p>
    <br>
    <p> Al dar click en el boton "Informacion" se mostrara un breve resumen de como funciona la division de las direcciones ip, ademas de ciertos ocnceptos basicos que son importantes conocer</p>
    
    <button onclick="window.location.href = 'dashboard.php';">Regresar al menú</button>
</body>
</html>
