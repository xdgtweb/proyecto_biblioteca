<?php
  
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function esValido(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $email = test_input($_POST["email"]);

        if($firstname != "" && $lastname != "" && $email != ""){
            return true;
        }
      }

}