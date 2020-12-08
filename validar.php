<?php
    if(isset($_POST['submit'])){
         if(empty($usuario)){
             echo "<p class='error'> * Agrega un correo electronico </p>";
         }else{ 
           if(!filter_var($usuario, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'> * El correo es incorrecto Ej:example@gmail.com </p>";
           }
        }

        if(empty($password)){
            echo "<p class='error'> * Agrega una password </p>";
        }else{
            if(strlen($password) > 8){
                echo "<p class='error'> * La password es muy larga Ej: 8 caracteres</p>";
            }
        }
    }

?>