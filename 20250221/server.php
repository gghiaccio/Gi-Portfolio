<?php
//restituisco un salutino carino
function salutino($name)
{
    $salutation = "Ciao " . $name . ", funziono correttamente...per ora.";
    return $salutation;
}

// creo il server soap, impiegando il file wsdl
$server = new SoapServer("test.wsdl");

// associo la funzione al server SOAP
$server->addFunction("salutino");

// gestiscon le richieste soap
$server->handle();
?>
