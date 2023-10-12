<?php  
        if(isset($_GET['Valor'])){
            include 'Conversor.php';
            $resultado = new Conversor($_GET['valor'], $_GET['medidaDe'], $_GET['medidaPara']);
            define('resultado', $resultado->getResultado());
            
        }else{
            define('valor',0);
            define('resultado',0);
        }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor - Unidades</title>
</head>
<body>

    <h3>Conversor de Unidades</h3>

    <form action="Conversor.php" method="get">
        <label for="valor">Digite a Quantidade</label>
        <input type="number" name="valor" id="valor">

        <select name="medidaDe" id="medidaDe">
            <option value="1">Metro(s)</option>
            <option value="1">Quilômetro(s)</option>
            <option value="1">Centimetro(s)</option>  
            <option value="1">Milímetro(s)</option>  

        </select>

        
        <select name="medidaPara" id="medidaPara">
            <option value="1">Metro(s)</option>
            <option value="1000">Quilômetro(s)</option>
            <option value="100">Centimetro(s)</option>  
            <option value="1000">Milímetro(s)</option>  

        </select>



    </form>
    
    <button type="submit" >Converter</button>

<label for="resultado"> Resultado: </label>
<input type="number" id="resultado" name="resultado" value="<?=resultado?>" readonly>

    
</body>
</html>