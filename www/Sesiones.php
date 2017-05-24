<?php
	//session_start();
	//$USUARIO = $_SESSION['nombres'];
	
	//echo "<h1 class='text-center'>..S E S I O N..</h1> <br>";
	//echo "<h2 class='text-center'>EL NOMBRE ES : $USUARIO </h2> <br>";
	//echo "<a class='text-center' href='Session.php'>.......... C E R R A R    S E S I O N .....</a><br>";
	//echo "<a class='text-center' href='index.php'>.......... VOLVER .....</a>";

    //incluyo la librería
    require_once('lib/nusoap.php');
    //creo el objeto soap_server y lo configuro
    $server = new soap_server;
    $server->configureWSDL('ACTIVIDAD #16', 'urn:phpcentral');
    $server->wsdl->schemaTargetNamespace = 'urn:phpcentral';
    //declaro la función del webservice
    function saludar($nombre) {
        if (empty($nombre)) {
            return new soap_fault('Cliente', '', 'Ingrese su nombre!');
        }
        return "HOLAAA ! " . $nombre;
    }
    //registro la función del webservice
    $server->register(
            'DA CLICK AQUI USUARIO !!' //nombre de la función
            , array('nombre' => 'CESAR SOTO ') //parametro de entrada (un string)
            , array('return' => 'ACTIVIDAD 16')  //parametro de retorno (un string)
    );
    // se crea el HTTP listener
    $HTTP_RAW_POST_DATA = (isset($HTTP_RAW_POST_DATA)) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);
    exit();

    //se incluye la librería
    require_once('lib/nusoap.php');
    $urlWebService = 'C:/wamp/www/Sessiones.php';
    $urlWSDL = $urlWebService . '?wsdl';
    // Creo el objeto soapclient
    $clienteSOAP = new nusoap_client($urlWSDL, 'wsdl');
    // invocación del método del webservice
    $respuesta = $clienteSOAP->call('SALUDAR', array('nombre' => 'CESAR SOTO'));
    // muestro la respuesta
    echo '<pre>';
    print_r($respuesta);
   
   

require_once('lib/nusoap.php');
	function getProd($categoria) {
        if ($categoria == "libros") {
            return join(",", array(
                "El señor de los anillos",
                "Los límites de la Fundación",
                "The Rails Way"));
        }
        else {
            return "No hay productos de esta categoria";
        }
    }
      
    $server = new soap_server();
    $server->configureWSDL("producto", "urn:producto");
      
    $server->register("getProd",
        array("categoria" => "xsd:string"),
        array("return" => "xsd:string"),
        "urn:producto",
        "urn:producto#getProd",
        "rpc",
        "encoded",
        "Nos da una lista de productos de cada categoría");

    $HTTP_RAW_POST_DATA = (isset($HTTP_RAW_POST_DATA)) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);


   require_once('lib/nusoap.php');
    $cliente = new nusoap_client("http://localhost/Sessiones.php");
      
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
      
    $result = $cliente->call("getProd", array("categoria" => "libros"));
      
    if ($cliente->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<h2>Libros</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
    

?>