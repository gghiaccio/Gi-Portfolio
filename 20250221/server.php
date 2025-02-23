<?php

//restituisco un salutino carino
function salutino($name)
{
    return "Ciao " . $name . ", funziono correttamente...per ora.";
}

// creo il server soap, impiegando il file wsdl
$server = new SoapServer("http://localhost/soap/test.wsdl", ['soap_version' => SOAP_1_1]);


// associo la funzione al server SOAP
$server->addFunction("salutino");

// gestiscon le richieste soap
$server->handle();
?>
