<?php
    if(isset($_POST['submit'])){
        $campos = array();

         if(empty($usuario)){
            array_push($campos,"Agrega un correo electronico");
         }else{ 
           if(!filter_var($usuario, FILTER_VALIDATE_EMAIL)){
            array_push($campos,"El correo error Ej:example@gmail.com");
           }
        }

        if(empty($password)){
            array_push($campos,"Agrega una password");
        }else{
            if(strlen($password) < 6){
                array_push($campos,"La password es maximo de 6 caracteres");
            }
        }

        if(count($campos) > 0){
            echo "<div class='error'>";
            for($i=0; $i < count($campos); $i++){
                echo "<li>".$campos[$i]."</li>";
            }
            echo "</div>";
        }else{
            echo "<div class='correcto'> Los datos son correctos </div>";
        }
    }

?>