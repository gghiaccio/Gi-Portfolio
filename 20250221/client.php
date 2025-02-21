<?php
// URL del file WSDL
$wsdl_url = "http://URL_AL_DEL_FILE_WSDL";

// check se il modulo di input ha inviato un nome
if (isset($_POST['name'])) 
{
    // check che non sia nullo
    if ($_POST['name'] != null) 
    {
        // creo client SOAP utilizzando il WSDL
        $client = new SoapClient($wsdl_url);

        // richiamo il salutino
        $response = $client->salutino(htmlentities($_POST['name']));

        // stampo la response
        print_r($response);
    }
}
?>
  
<style>
    body 
    {
        background-color: gray;
        color: white;
        font-family: "Times New Roman", Times, serif;
    }
    h1 
    {
        text-align: center;
    }
    p, label, input, button 
    {
        color: white;
    }
</style>
