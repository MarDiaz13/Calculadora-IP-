<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - Calculadora Binaria</title>
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
        h2{
            color: #00FFFF; /* Color azul claro para el título */
        }
        p {
            margin-bottom: 20px;
        }
         .imagen img {
            width: 100px;
            margin-right: 100px;
            height: auto;
        }
        .imagen2 img {
            width: 100px;
            margin-right: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Información sobre redes - Calculadora Binaria</h1>
    <br>
    <h2>  IPv4</h2> 
    <br>
    <br>
    <p> IPv4 es la versión 4 del Protocolo de Internet (IP o Internet Protocol) y
constituye la primera versión de IP que es implementada de forma
extensiva. </p>
    <p> IPv4 es el principal protocolo utilizado en el Nivel de Red del Modelo
TCP/IP para Internet.</p>
    <p> Fue descrito inicialmente en el RFC 791 elaborado por la Fuerza de
Trabajo en Ingeniería de Internet (IETF o Internet Engineering Task Force)
en septiembre de 1981, documento que dejó obsoleto al RFC 760 de enero
de 1980</p>
    <br>
    <br>
     <h2>  Caracteristicas del Protocolo de Internet</h2>
     <br>
     <br>
     <p> Opera en la Capa de Red del modelo OSI y en la Capa de Internet del
modelo TCP/IP.
La unidad de información intercambiada por IP es denominada paquete o
datagrama
Protocolo no orientado a conexión.
Fragmenta y reensambla los paquetes si es necesario.
Direccionamiento mediante direcciones lógicas IP de 32 bits.
Si un paquete no es recibido, este permanecerá en la red durante un
tiempo finito.
Realiza el mejor esfuerzo para la distribución de paquetes.
Tamaño máximo del paquete de 65535 bytes.
Sólo se realiza verificación por suma al encabezado del paquete, no a los
datos éste que contiene.
Se define en la RFC 791
</p> 
<p> El IP ejecuta las siguientes operaciones:</p>
<p> – Define un paquete y un esquema de direccionamiento.</p>
<p> – Transfiere los datos entre la capa Internet y las capas 
de acceso de red. 
– Permite que un paquete sea enviado desde un host a 
otro en base al esquema de direccionamiento.</p>

 <img src="encabezado.png" alt="Encabezado de IP" class="imagen" >
 <br>
 <p>Version (4 bits): Versión del protocolo IP, IPv4 = 4(0100) e IPv6=6(0110).
● IHL (4 bits): Internet Header Length. Longitud de la cabecera IP en palabras de 
32-bits.
● ToS (8 bits): Nos indica como se va a manipular el datagrama.
● Length (16 bits): Indica la longitud total del datagrama, en octetos. Máx: 65535. 
● Identification (16 bits): Se usa para distinguir fragmentos de distintos 
datagramas.
● Flags (3 bits): Indica si hay fragmentación del datagrama.
Bit 0: reserved, must be zero
Bit 1: (DF) 0 = May Fragment, 1 = Don't Fragment.
Bit 2: (MF) 0 = Last Fragment, 1 = More Fragments.
 </p>
 <p>● Fragment Offset (13 bits): Este campo indica a que parte del datagrama 
pertenece este fragmento, el primer fragmento tiene la posición cero.
● TTL (8bits): Tiempo de existencia máximo para el datagrama. 
● Protocol (8 bits): Indica el protocolo de nivel superior que envía y recibe el 
datagrama (1=ICMP,6=TCP,17=UDP). 
● Checksum (16 bits): Sólo de la cabecera (se recalcula en cada salto).
● Source&destination address (32 bits c/u): Indica la dirección fuente y destino 
del datagrama
● Options (variable): Son opciones que pueden aparecer o no, pero que deben 
reconocerse. El relleno sirve para que toda la cabecera sea múltiplo de 32-bits. </p>
 <br>
 <h2> Estructura de una direccion IP</h2>
 <br>
 <p> Direccion IP</p>
 <p> ● Una dirección IP es una dirección única que ciertos dispositivos
electrónicos utilizan para su identificación y comunicación con otros
dispositivos en una red de cómputo.
● Todos los dispositivos participantes en la red, incluyendo ruteadores,
computadoras, servidores, impresoras, teléfonos y otros dispositivos
deben de tener su dirección IP única.
● La dirección IP lógica de 32 bits tiene una composición jerárquica y
consta de dos partes. La primera parte identifica la red (componente de
red), y la segunda parte identifica un host (componente de host) en esa
red.</p>  
 
 <p> ● Una jerarquía es como un árbol genealógico, con los padres en la parte
superior y los hijos conectados a ellos, debajo.
● Para una red, esto significa que parte del número de 32 bits identifica la red
(padre), mientras que el resto de los bits identifican el host (hijo).</p> 
 
 <img src="jerarquia.png" alt="Jerarquia en IP" class="imagen2" > 
 <br>
  <h2>¿Por que utilizar direccionamiento IP? </h2>
  <br>
  <br>
  <p> Para que dos sistemas se comuniquen, se
deben poder identificar y localizar entre sí. La
dirección IP identifica la localización de un
sistema en la red.
Una dirección de red ayuda al router a
identificar la ruta dentro de la red.
El router utiliza la dirección de red para
identificar la red destino de un paquete dentro
de una internetwork.</p>  
  <p> Este direccionamiento lógico se da en la Capa de Red
      modelo OSI o Capa de Internet modelo TCP/IP</p> 
    <button onclick="window.location.href = 'dashboard.php';">Regresar al menú</button>
</body>
</html>

