<?php 
    include_once "Conversor.php";
    $conversor = isset($_GET['selectDe']) ? new Conversor($_GET['numQuantidade'], $_GET['selectDe'], $_GET['selectPara']) : new Conversor();
?> 