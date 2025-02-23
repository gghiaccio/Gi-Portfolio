<?php



// URL del file WSDL
$wsdl_url = "http://localhost/soap/test.wsdl";

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
        echo htmlspecialchars($response);
    }
}
?>
  
  <!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client SOAP - Salutino.</title>
    <style>
        body 
        {
            background-color: gray;
            color: white;
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            padding: 20px;
        }
        h1 
        {
            text-align: center;
        }
        p, label, input, button 
        {
            color: white;
        }
        form
        {
            margin-top: 20px;
        }
        input, button
        {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            margin: 5px;
        }
        button
        {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover
        {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Client SOAP - Salutino.</h1>

    <form method="post">
        <label for="name">Inserisci il tuo nome:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Saluta</button>
    </form>

</body>
</html>
