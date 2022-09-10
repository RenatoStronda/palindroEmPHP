<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Atividade4 </title>

</head>
<body>
<form method ="POST" onsubmit="return validaForm(this)">
        <Label> Digite Um Palíndromo: </label>
        <input type="text" name="name">
        <input type="submit" value="Enviar">
</form>
<?php
function Palindrome($name)
{ 
    if (strrev($name) == $name)
    { 
        return 1; 
    }
    else
    {
        return 0;
    }
}
$name = strtoupper($_POST["name"]);
if(Palindrome($name)){ 
    echo "Palíndromo: ",  $name;
}
else { 
echo "Não É Um Palíndromo: ".strrev($name); 
}       
?> 
</body>
</html>