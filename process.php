<?php

if(isset($_POST)){
    $data = $_POST["name"];
    foreach ($data as $key => $value) {
       echo "Value of field {$key}: {$value} <br/>";
    }
}