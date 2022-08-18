<?php
    if (isset($_POST["ok"])) {
        
        $email = (isset($_POST["email"])) ?$_POST["email"] :"";
        $senha = (isset($_POST["senha"])) ?$_POST["senha"] :"";

        echo "$email<br>$senha";

    } else {
        header("Location:/PI");
    }
?>

