<?php


if(isset($_COOKIE['contador']))
  { 
    // Caduca 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60 ); // 365 * 24 * 60 * 60
    $mensaje2 = '# VISITAS: ' . $_COOKIE['contador']; 
  } 
  else 
  { 
    // Caduca  
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60 ); // 365 * 24 * 60 * 60
    $mensaje2 = "<h4>BIENVENIDO PROFE SALINAS A LA PAGINA VIEW PULSORO</h4>" ;

  } 
session_start();
    $_SESSION['nombres'] = "CLIENTE !";
    
    if(isset($_SESSION['nombres'])){
        $Session1 = "<h4><p> BIENVENIDO: $_SESSION[nombres]</p></h4>";
    }else{
        $Session1 = "<p> Cual es su nombre? </p>";
    }
    $USUARIO = $_SESSION['nombres'];
    //echo "<h1 class='text-center'>..S E S I O N..</h1> <br>";
    //echo "<h2 class='text-center'>EL NOMBRE ES : $USUARIO </h2> <br>";
    
    $Cerrar = "<h4><p><a href ='Sesiones.php'>CERRAR SESSION</a></p></h4>";       

    if (empty($_SESSION['count'])) {
       $_SESSION['count'] = 1;
    } else {
       $_SESSION['count']++;
    }

    $numeros = "<p>Ha visto esta página $_SESSION[count]<p>";
    //session_unset();
    //session_destroy();

    //if(isset($_SESSION["nombres"])){
    //  $Session = "<p> SU NOMBRE ES  $_SESSION[nombres]</p>";
    //}else{
   //     echo "<p> CUAL ES SU NOMBRE ??? </p>";
   // }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />



    <title>Inicio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css1.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/js/lightbox.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen">
</head>
<style>
.google-map {
  margin-top: 1em;
}
.google-map iframe {
    width:50%;
    min-height: 400px;
    border: none;
}
</style>
<body id="pagina1" padding-top=100px data-gr-c-s-loaded="true"> 
    <header>
        <div class="header-top">
            
        </div>
    </header>
 <div class="wrap">    
    <div class="brand"></div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                <div align="right">
                <input type="search" placeholder="Buscar . . ." id="inputBusqueda">

                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <img class="logo" src="img/FONDO2.png" alt="" width="200" height="100">
                    </li>
                   <li style = "width:100px;height: 100px;">
                        
                    </li>

                        
                    <li>
                        <a href="#precios" text="center-block">PRECIOS</a>
                    </li>
                    <li>
                        <a href="#servicios">SERVICIOS</a>
                    </li>
                    <li>
                        <a href="#pedidos">PEDIDOS</a>
                    </li>
                    <li>
                        <a href="#contactanos">CONTACTANOS</a>
                    </li>
                    <li>
                        <a href="#galeria">GALERIA</a>
                    </li>
                    <li>
                    <?php
                          echo $mensaje2;
                          echo $Cerrar;
                    ?>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <header>
        <div class="search" id="search">
                 <table class="search-table" id="searchTable">
                <thead>
                    <tr>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#precios">Precios</a></td>
                    </tr>
                    <tr>
                        <td><a href="#servicios">Servicios</a></td></a>
                    </tr>
                    <tr>
                        <td><a href="#pedidos">Pedidos</a></td>
                    </tr>
                    <tr>
                        <td><a href="#contactanos">Contacto</a></td>
                    </tr>
                    <tr>
                        <td><a href="#galeria">Galeria</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Planchado">Planchado</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Domicilio">Servicio a Domicilio</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Lavado_seco">Lavado Seco</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Edredones">Lavado de Edredones</a></td>
                    </tr>
                    <tr>
                        <td><a href="#express">Servicio Express</a></td>
                    </tr>
                    <tr>
                        <td><a href="#pantalones">pantalones</a></td>
                    </tr>
                    <tr>
                        <td><a href="#vestidos">Vestidos de Novia</a></td>
                    </tr>
                    <tr>
                        <td><a href="#cortinas">Lavado De Cortinas</a></td>
                    </tr>
                    <tr>
                        <td><a href="#desmanchado">Desmanchado de Prendas</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Abrigos">Abrigos</a></td>
                    </tr>
                    <tr>
                        <td><a href="#Chamarras">Chamarras</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </header>
        <!-- /.container -->
    </nav>
   
      <div class="container">
        <div class="row" id="ABRIR"  >
            <div class="box">
                <div class="text-center">
                    <br>
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive center-block" src="img/CLINN7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/CLINN6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/FONDO1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/CLINN2.png" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small> I N I C I O</small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                    
                    <hr class="tagline-divider"><br>
                    <center><h1 class="brand-name"><a id="MOSTRAR" href="#ABRIR">C L I N N    T I N T O R E R I A</h1></a></center>
                    <hr class="tagline-divider"><br>
                    <center><img class="img-responsive center-block" src="img/FONDO1.png" alt="" width="500" height="500"></center>
                        <center><small>By
                            <center><strong>T I M E S   S O F T W A R E</strong></center>
                        </small></center>
                        <hr class="tagline-divider">
                    <h1 class="intro-text text-center" id="pedidos">P E D I D O S</h1>
                    <h1>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h1>
                    <div style="display: -webkit-flex;display: flex;">
                    <form  action="#pedidos" title="Consulta" method="POST" style="width: 50%;">
                    <hr class="tagline-divider">
                    <h2 style="text-align: center;"> BUSCAR </h2>

                        <hr class="tagline-divider">

                        <table>
                            <tr>
                                <td><h4>NOMBRE</h4>
                                <input type="text" name="nombre">
                                <h4>
                                <input type="submit" name="consultar" value=" - CONSULTAR -" align="center">
                                </h4>
                                </td>
                            </tr>
                        </table>
                          <font style="color:black;" align="center"  face="Calibri,arial" size=4>             
                    <?php
                        if ($_POST) {
                        $busqueda=$_POST['nombre'];
                        try{

                            $conexion=new PDO('mysql:host=localhost; dbname=clinn_tintoreria','root','paulico99');
                            
                            $conexion->exec("SET CHARACTER SET utf8");
                            $Cons="select * from pedido where nombre= :n_art";
                            $resul=$conexion->prepare($Cons);
                            $resul->execute(array(":n_art"=>$busqueda)); 
                            while($registro=$resul->fetch(PDO::FETCH_ASSOC)){
                                //echo ("CONSULTA");
                                echo "<br>";
                                echo("NOMBRE: ".$registro['nombre']);
                                echo "<br>"; 
                                echo ("CANTIDAD: ".$registro['cantidad']);
                                echo "<br>"; 
                                echo ("TIPO SERVICIO: ".$registro['tipo_servicio']);
                                echo "<br>";
                                echo ("TIPO PEDIDO: ".$registro['tipo_pedido']);
                                echo "<br>";
                                echo ("FECHA PEDIDO: ".$registro['fecha_pedido']);
                                echo "<br>";
                                echo ("FECHA ENTREGA: ".$registro['fecha_entrega']);
                                echo "<br>";
                                echo ("STATUS: ".$registro['status']);
                                echo "<br>";

                            }
                            $resul->closeCursor();
                            }catch(Excepcion $e){

                                die('Error:'. $e->GetMessage());
                            }

                        }
                    ?>
                    </font>
                    </form>

                   
                    <!--<br>
                    //<h1>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h1>-->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="box">
                    <hr class="tagline-divider">
                    <h2 class="intro-text text-center" id="servicios"> S E R V I C I O S</h2>
                    <hr class="tagline-divider">
                    <br>
                    <div class="nuestros-servicios ns-for-offcanvas" itemscope="itemscope" itemtype="http://schema.org/NewsArticle">

                        <p style="text-align: center;"><strong><span itemprop="headline" style="font-size: 36pt;" class="stroke">Nuestros Servicios</span></strong></p>
                        <meta itemprop="datePublished" content="2015-09-12T08:00:00+08:00">

                            <span itemprop="description">
                        <p style="text-align: center;">Nos caracerizamos por dar un amplio servicio de lavado, planchado, servicio a domicilio y servicios extras.</p></span> 

                        <span itemprop="articleBody">
                        <div class="uk-grid ">
                           
                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=Domicilio class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Servicio a Domicilio</strong></span></p>
                        <img itemprop="image" src="/img/domicilio.png" alt="Nuestros Servicios">
                        <p>Llevamos tu ropa a donde tu quieras(a partir de 3 prendas).</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=Lavado_seco class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Lavado en Seco</strong></span></p>
                        <img itemprop="image" src="/img/lavado_seco.jpg" alt="Nuestros Servicios">
                        <p>Utilizamos el mejor equipo para el lavado en seco.</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=Edredones class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Lavado de edredones</strong></span></p>
                        <img itemprop="image" src="/img/edredon.jpg" alt="Nuestros Servicios">
                        <p>Damos servicio de lavado y secado de edredones.</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=Planchado class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Servicio de Planchado</strong></span></p>
                        <img itemprop="image" src="/img/planchado.jpg" alt="Nuestros Servicios">
                        <p>Para un planchado perfecto somos tu mejor opción.</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=express class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Servicio Express</strong></span></p>
                        <img itemprop="image" src="/img/express.jpg" alt="Nuestros Servicios">
                        <p>Tus prendas en mismo día (llevándolas antes de las 12:00).</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=pantalones class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Pintado de pantalones</strong></span></p>
                        <img itemprop="image" src="/img/pantalon.jpg" alt="Nuestros Servicios">
                        <p>¡Dejamos tus pantalones como nuevos!</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=vestidos class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Vestidos de novia</strong></span></p>
                        <img itemprop="image" src="/img/novia.jpg" alt="Nuestros Servicios">
                        <p>Lavamos y planchamos tu vestido de novia.</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=cortinas class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Lavado de cortinas</strong></span></p>
                        <img itemprop="image" src="/img/cortinas.jpg" alt="Nuestros Servicios">
                        <p>Lavado y planchado (plizado) de tus cortinas.</p>
                        </div></div></div>

                        <div class="uk-width-medium-1-1 uk-width-large-1-2 ">
                        <div class="uk-grid">
                        <div class="uk-width-1-2 ser-img-marg">
                        </div><div id=desmanchado class="uk-width-1-2">
                        <p class="blue-bar" style="width: 95%;"><span style="font-size: 16pt;"><strong>Desmanchado de prendas</strong></span></p>
                        <img itemprop="image" src="/img/desmanchamos.jpg" alt="Nuestros Servicios">
                        <p>Desmanchamos todo tipo de prendas.</p>
                        </div></div></div>
                        </div>

                        </span>


                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div> 
                </div>
            </div>
        </div>

    </div
        <!-- /.container -->
 <div class="container">

        <div class="row">
            <div class="box">
                
                    <hr class="tagline-divider">
                    <h2 class="intro-text text-center" id="precios">
                        <strong>P R E C I O S</strong>
                    </h2>
                    <hr class="tagline-divider">
                    <h2 class="text-center" style="color: #00BFFF;">Lista de Precios</h2>
                    <table class="table table">
                            <tr>
                            <td><strong>Traje de 2 Piezas</strong></td>
                            <td style="color: #00BFFF;">85$</td>
                            <td><strong>Vestido novias</strong></td>
                            <td style="color: #00BFFF;">450$</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Vestido Corto</strong></td>
                            <td style="color: #00BFFF;">100$</td>
                            <td><strong>Saco</strong></td>
                            <td style="color: #00BFFF;">50$</td>
                        </tr>

                        <tr>
                            <td><strong>Vestido Largo</strong></td>
                            <td style="color: #00BFFF;">140$</td>
                            <td><strong>Camisa</strong></td>
                            <td style="color: #00BFFF;">40$</td>
                        </tr>
                        <tr>
                            <td style="height: 50px;"></td>
                            <td></td>
                            <td><strong>Blusa</strong></td>
                            <td style="color: #00BFFF;">40$</td>
                        </tr>
                        <tr>
                            <td style="font-size: 18px;"><strong>Vestido XV años</strong></td>
                            <td></td>
                            <td><strong>Pantalon</strong></td>
                            <td style="color: #00BFFF;">35$</td>
                        </tr>
                        <tr>
                            <td>Sencillo</td>
                            <td style="color: #00BFFF;">250$</td>
                            <td><strong>Corbata</strong></td>
                            <td style="color: #00BFFF;">20$</td>

                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td style="color: #00BFFF;">450$</td>
                            <td><strong>Chalinas</strong></td>
                            <td style="color: #00BFFF;">50$</td>
                        </tr>
                        <tr>
                            <td style="height: 50px;""></td>
                        </tr>
                        <tr>
                            <td id=Abrigos><strong>Abrigos</strong></td>
                            <td></td>
                            <td><strong>Chaleco</strong></td>
                        </tr>
                        <tr>
                            <td>Cortos</td>
                            <td style="color: #00BFFF;">150$</td>
                            <td>Ligera</td>
                            <td style="color: #00BFFF;">70$</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Largos</td>
                            <td style="color: #00BFFF;">180$</td>
                            <td>Plumas</td>
                            <td style="color: #00BFFF;">110$</td>
                        </tr>
                        <tr>
                            <td id=Chamarras><strong>Chamarras</strong></td>
                            <td></td>
                            <td><strong>Gabardina</strong></td>
                            <td style="color: #00BFFF;">140$</td>
                        </tr>
                        <tr>
                            <td>Ligera</td>
                            <td style="color: #00BFFF;">140$</td>
                        </tr>
                        <tr>
                            <td>Gruesa</td>
                            <td style="color: #00BFFF;">200$</td>
                        </tr>

                        <tr>
                            <td style="height: 50px;""></td>
                        </tr>
                        <tr>
                            <td><strong>Edredon</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Tintoreria</strong></td>
                            <td style="color: #00BFFF;">195$</td>
                        </tr>
                        <tr>
                            <td><strong>Lavanderia</strong></td>
                            <td style="color: #00BFFF;">90$</td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>
        </div>
    </div>

     <div class="container">
        <div class="row">
            <div class="box">
                
                    <hr class="tagline-divider">
                    <h1 class="intro-text text-center" >El CLIMA</h1>
                    <hr class="tagline-divider">
                    <br>
                   
                        <form action="#contactanos" method="get">
                        <input type="text" name="palabra" value="
                        <?php  echo ($_GET["palabra"]);  ?>"/>
                        <input type="submit" name="buscador" value="Buscar"  />
                        </form>

                        <?php 

                        if ($_GET['buscador'])
                        {

                        $buscar = $_GET['palabra'];

                        if (empty($buscar))
                        {
                        echo "No se ha ingresado ninguna palabra";
                        }
                        else
                        {
                            $xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/find?q=$buscar,&units=mexico&type=accurate&mode=xml&APPID=2d86949f87dc1fc9ad59431b130a64ec");
                            $temperatura = $xml->list->item->temperature["value"];
                            $presion = $xml->list->item->pressure["value"];
                            $humedad = $xml->list->item->humidity["value"];
                            $Coordenadas = $xml->list->item->city->coord["lon"];
                            $Nombre = $xml->list->item->city["name"];
                            $precipitacion = $xml->list->item->precipitation["mode"];
                            }

                        }
                            ?>
                            <html>
                            <head>
                            <title>CLIMA</title>
                            </head>
                            <body>
                            <h1>Clima De <?php echo ($Nombre);?> </h1>
                            <ul>
                            <li>Temperatura :
                            <?php echo($temperatura); ?> &deg;F
                            </li>
                            <li>Presion:
                            <?php echo($presion); ?> hPa
                            </li>
                            <li>Humedad :
                            <?php echo($humedad); ?>%
                            </li>
                            <li>Coordenadas :
                            <?php echo($Coordenadas); ?>
                            </li>
                            <li>Precipitacion :
                            <?php echo($precipitacion); ?>
                            </li>
                            </ul>

                    <hr class="tagline-divider">
                    <h2 class="intro-text text-center" id="contactanos">CONTACTANOS</h2>
                    <hr class="tagline-divider">
                
                <div class="uk-width-medium-1-1 uk-width-large-1-2 "><div>
                    <b><h4>TELEFONO:</h4></b>
                        <strong>Llamar +512 668 817 1212</strong>
                    </h4>
                    <b><h4>CORREO ELECTRONICO:</b>
                        <strong><a href="mailto:name@example.com">Info@Clinm.mx http://www.clinn.mx</a><strong>
                    </h4>
                    <b><h4>DIRECCION:</b>
                        <strong>Indenpendencia #1000 pte.
                            <br>LOS MOCHIS, SINALOA MEXICO</strong>
                    </h4></b>
                    <b><h4>DESCRIPCION:</b>
                        <strong>Limpieza Ecologica que cuida de sus prendas y respeta el medio ambiente
                        <br>ROPA - TINTORERIA - LAVANDERIA<br></strong>
                    </h4>
                    </div>
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCOXQDaCcyoMjKjhskzRA2qWZokligurdw
                        &q=CLINN+ECOTINTORERIA"></iframe>
                    </div>
                    <br>
                    <a href="https://www.facebook.com/elpulsoro" target="_blank"><img alt="siguenos en facebook" height="48" src="http://4.bp.blogspot.com/-LnKbkk802kw/UiXwV9rN8xI/AAAAAAAAB0Y/fQCQKFEbvjM/s1600/face.png" title="siguenos en facebook" width="48" /></a>

                    <a href="URL-Google+" target="_blank"><img alt="siguenos en Google+" height="48" src="http://3.bp.blogspot.com/-IwxItZ1_cM0/UiX0-g2DrCI/AAAAAAAAB1c/hOSA6Uklo-I/s1600/Google%252B+alt.png" title="siguenos en Google+" width="48" /></a>

                    <a href="URL-youtube" target="_blank"><img alt="Canal de youtube" height="48" src="http://1.bp.blogspot.com/-nFaU3lAbBgg/UiX1C-m6KjI/AAAAAAAAB3M/Lbf9N4I9QOg/s1600/Youtube+alt+2.png" title="Canal de youtube" width="48" /></a>

                    <a href="URL-Twitter" target="_blank"><img alt="siguenos en Twitter" height="48" src="http://3.bp.blogspot.com/-sbO3cK5dmzo/UiX1BG6KASI/AAAAAAAAB2s/wYYv24Dpggw/s1600/Twitter+alt+4.png" title="siguenos en Twitter" width="48" /></a>

                </div></center>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>			
 </div>
  <script src="js/buscador.js"></script>
    <script src = "js/lightbox-plus-jquery.min.js">
						        		      </script>
    				<div  class="container" class="intro-text text-center" class="img-responsive img-border">
        				<div id=galeria class="row">
            					<div class="box">
            						
					            		  <hr class="tagline-divider">
							        	  <h2 class="intro-text text-center" >G A L E R I A</h2>
							        	  <hr class="tagline-divider">
										<?php 
											include ("classGaleria.php")
										?>
									
								</div>  
						</div>
					</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 1500 //changes the speed
    })

    $('#MOSTRAR').click(function(env){

        $('#ABRIR').toggle(2000, function(){
            alert("LISTO  SU ACCION SE HA REALIZADO")
        });
    });

    $(document).ready(function(){
				  // Initialize Tooltip
				  $('[data-toggle="tooltip"]').tooltip(); 
				  
				  // Add smooth scrolling to all links in navbar + footer link
				  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

				    // Make sure this.hash has a value before overriding default behavior
				    if (this.hash !== "") {

				      // Prevent default anchor click behavior
				      event.preventDefault();

				      // Store hash
				      var hash = this.hash;

				      // Using jQuery's animate() method to add smooth page scroll
				      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
				      $('html, body').animate({
				        scrollTop: $(hash).offset().top
				      }, 700, function(){
				   
				        // Add hash (#) to URL when done scrolling (default click behavior)
				        window.location.hash = hash;
				      });
				    } // End if
				  });
				});

    </script>

<style type="">
    li:hover {
    background-color: #C0C0C0;
}
</style>
</body>

</html>