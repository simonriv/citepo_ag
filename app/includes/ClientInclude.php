<?php
    require_once "../library/functions.php";

    $functions = new Functions();

    $register = $functions->register($_POST["name"],$_POST["lastName"],$_POST["email"],$_POST["dni"],
    "+57",$_POST["phone"],$_POST["countries"],$_POST["province"],$_POST["city"],$_POST["ocupation"],"",$_POST["dateBirth"],true);

    if($register > 0){
        
        echo "true,".$register;
    }else{
        echo "false";
    }
?>