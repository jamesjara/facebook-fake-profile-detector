<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Herramientas de seguridad para Facebook</title>
<style type="text/css"> 
    <!-- 
    body  {
	background: #666666;
	margin: 0; /* es recomendable ajustar a cero el margen y el relleno del elemento body para lograr la compatibilidad con la configuración predeterminada de los diversos navegadores */
	padding: 0;
	text-align: center; /* esto centra el contenedor en los navegadores IE 5*. El texto se ajusta posteriormente con el valor predeterminado de alineación a la izquierda en el selector #container */
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 100%;
    }
    .twoColHybLtHdr #container { 
    	width: 80%;  /* esto creará un contenedor con el 80% del ancho del navegador */
    	background: #FFFFFF;
    	margin: 0 auto; /* los márgenes automáticos (conjuntamente con un ancho) centran la página */
    	border: 1px solid #000000;
    	text-align: left; /* esto anula text-align: center en el elemento body. */
    } 
    .twoColHybLtHdr #header {
	padding: 0 10px;  /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen bajo él. Si se utiliza una imagen en el #header en lugar de texto, es posible que le interese quitar el relleno. */
	background-color: #006699;
    } 
    .twoColHybLtHdr #header h1 {
    	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
    	padding: 10px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
    }
    
    /* Sugerencias para sidebar1:
    1. Dado que está trabajando en unidades relativas, es conveniente no utilizar relleno en la barra lateral. Se añadirá al ancho global en el caso de navegadores que cumplen los estándares, creando un ancho real desconocido. 
    2. Dado que se utilizan las unidades em para el valor de barra lateral, tenga en cuenta que su ancho variará con los diferentes tamaños de texto predeterminados.
    3. El espacio entre el lado del div y los elementos que contiene puede crearse colocando un margen izquierdo y derecho en dichos elementos, como se observa en la regla ".twoColHybLtHdr #sidebar1 p".
    */
    .twoColHybLtHdr #sidebar1 {
	float: left;
	width: 12em; /* dado que este elemento es flotante, debe asignarse un ancho */
	background: #EBEBEB; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
	padding: 15px 0; /* el relleno superior e inferior crea un espacio visual dentro de este div  */
	color: #000000;
    }
    .twoColHybLtHdr #sidebar1 h3, .twoColHybLtHdr #sidebar1 p {
    	margin-left: 10px; /* deben asignarse los márgenes izquierdo y derecho de cada elemento que vaya a colocarse en las columnas laterales */
    	margin-right: 10px;
    }
    
    /* Sugerencias para mainContent:
    1. El espacio entre el mainContent y sidebar1 se crea con el margen izquierdo del div mainContent.  Con independencia de la cantidad de contenido que incluya el div sidebar1, permanecerá el espacio de la columna. Puede quitar el margen izquierdo si desea que el texto del div #mainContent llene el espacio de #sidebar1 cuando termine el contenido de #sidebar1.
    2. Tenga en cuenta que es posible que se produzca la caída de un elemento flotante (la caída del área mainContent no flotante debajo de la barra lateral) si se coloca un elemento más ancho que él en el div mainContent. Con un diseño híbrido (ancho global basado en porcentajes con barra lateral basada en ems), puede que no sea posible calcular exactamente el ancho disponible. Si el tamaño del texto del usuario es superior a la media, tendrá un div de barra lateral más ancho y, en consecuencia, menos espacio en el div mainContent. Debe tener en cuenta esta limitación (particularmente si el cliente añade contenido con Contribute.
    3. En el siguiente comentario condicional de Internet Explorer, la propiedad zoom se utiliza para asignar a mainContent "hasLayout." Esto puede contribuir a evitar diversos problemas específicos de IE.
    */
    .twoColHybLtHdr #mainContent { 
    	margin: 0 20px 0 13em; /* el margen derecho puede asignarse en porcentajes o píxeles. Éste crea el espacio a lo largo de la parte derecha de la página. */
    } 
    .twoColHybLtHdr #footer { 
    	padding: 0 10px; /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen por encima de él. */
    	background:#DDDDDD;
    } 
    .twoColHybLtHdr #footer p {
    	margin: 0; /* el ajuste en cero de los márgenes del primer elemento del pie evitará que puedan contraerse los márgenes (un espacio entre divs) */
    	padding: 10px 0; /* el relleno de este elemento creará espacio, de la misma forma que lo haría el margen, sin el problema de la contracción de márgenes */
    }
    
    /* Varias clases diversas para su reutilización */
    .fltrt { /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
    	float: right;
    	margin-left: 8px;
    }
    .fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. */
    	float: left;
    	margin-right: 8px;
    }
    .clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
    	clear:both;
        height:0;
        font-size: 1px;
        line-height: 0px;
    }
.Estilo1 {
	color: #000000;
	font-weight: bold;
}
.Estilo2 {color: #990000}
.Estilo3 {color: #0033CC}
.Estilo4 {color: #990033}
body,td,th {
	color: #FFFFFF;
}
.Estilo5 {color: #FFFFFF}
.Estilo9 {
	color: #990000;
	font-weight: bold;
	font-size: 18px;
}
.twoColHybLtHdr #container #sidebar1 .Estilo3 a {
	border-top-color: #333333;
	border-right-color: #333333;
	border-bottom-color: #333333;
	border-left-color: #333333;
	font-family: Arial, Helvetica, sans-serif;
	font-style: oblique;
	color: #006699;
}
.Estilo10 {font-weight: bold}
.Estilo11 {color: #0033CC; font-weight: bold; }
a:link {
	color: #FF0000;
}
a:active {
	color: #006699;
}
.Estilo20 {color: #000000}
    --> 
    </style>
<!--[if IE]>
    <style type="text/css"> 
    /* coloque las reparaciones de css para todas las versiones de IE en este comentario condicional */
    .twoColHybLtHdr #sidebar1 { padding-top: 30px; }
    .twoColHybLtHdr #mainContent { zoom: 1; padding-top: 15px; }
    /* la propiedad zoom propia que se indica más arriba proporciona a IE el hasLayout que puede necesitar para evitar diversos errores */
    </style>
    <![endif]--></head>

<body class="twoColHybLtHdr">

    <div id="container">
      <div id="header">
        <h1 class="Estilo5">Herramientas de seguridad para Facebook</h1>
        <!-- end #header --></div>
      <div id="sidebar1">
        <h3 align="center" class="Estilo2">Menu</h3>
        <p class="Estilo3"><span class="Estilo10"><a href="index.php">-Inicio</a></span></p>
        <p class="Estilo11"><a href="perfiles.php"> -Detector de perfiles</a></p>
        <p class="Estilo3"><strong><a href="foto.php">-Identificador de Foto</a></strong></p>
        <p class="Estilo3">&nbsp;</p>
        <p class="Estilo3">&nbsp;</p>
        <p class="Estilo3">&nbsp;</p>
        <p align="center" class="Estilo3"><span class="Estilo9">Información</span></p>
        <p align="left" class="Estilo3">Software desarrollado por Computer Society <br>
        para el analisis de perfiles relacionados a la red social Facebook.</p>
        <p align="left" class="Estilo3">&nbsp;</p>
        <p align="center" class="Estilo3"><span class="Estilo9">Logos</span></p>
        <p align="center" class="Estilo3"><img src="logo.png" width="157" height="62" /></p>
        <!-- end #sidebar1 --></div>
      <div id="mainContent">
        <h1> <span class="Estilo4">Detector de perfiles Falsos</span></h1>
        <p class="Estilo4"><!-- end #mainContent -->
        <span class="Estilo20">Bienvenido  en este sitio va a encontrar un conjunto de herramientas para mantener la mayor  seguridad en la red social Facebook, estas herramientas fueron desarrolladas  con diferentes estudios realizados en Costa Rica.</span>
        </p>
        <img src="logo.png" width="535" height="258" />
        <p align="center"> </p>
      </div>
    	<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
    	<br class="clearfloat" />
    	<div id="footer">
        <p class="Estilo1">CopyRight 2012 (c) Desarrollador Por James Jara y Luis Montero</p>
        <!-- end #footer --></div>
    <!-- end #container --></div>
    </body>
</html>
