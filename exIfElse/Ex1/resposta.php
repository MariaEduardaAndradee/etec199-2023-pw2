<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    
    <style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; 
    margin: 0;
}

form {
    background: linear-gradient(to bottom, #393e61, #030726);
    padding: 20px;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    color: white;
    
}

input[type=text], textarea {
    
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    
    background-color: #393e61;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #030726;
}
</style>
    <form>

<?php

    $numero = $_GET['numero'];


    if ($numero % 2 == 1) {
        $resultado = $numero + 8;

        echo "Seu número impar é:  $numero <br>";
        echo "E esse é o seu resultado:  $resultado";

    } else {
        $resultado = $numero + 5;
        echo "Seu número par é:  $numero <br> ";
        echo "E esse é o seu resultado:  $resultado";
    }


?>
    
    </form>
</body>
</html>
