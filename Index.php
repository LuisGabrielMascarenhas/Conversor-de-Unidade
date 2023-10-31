<?php 
    include "php/Converter.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de medidas</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
</head>
<body >
    <div>

    
    <h1 >Conversor de Unidades</h1>
    <form method="get" >
            <label for="numQuantidade">Digite a quantidade da medida: </label>
            <input value="<?=$conversor->getNumero()?>"type="number" id="numQuantidade" name="numQuantidade" required>
            <label for="selectDe">De:</label>
            <select name="selectDe" id="selectDe" required> <?=$conversor->getopcoesDe()?>
            </select>

            <label for="selectPara">Para:</label>
            <select 
            name="selectPara" id="selectPara" required><?=$conversor->getopcoesPara()?>
            </select>

        <button  type="submit">Converter</button>
    </form>
    <div >
        <label for="numResultado">Resultado:</label>
        <input  
        type="text" id="numResultado" name="numResultado" value="<?=$conversor->getResultado()?>"readonly>
        
    </div>
    </div>
</body>
</html>