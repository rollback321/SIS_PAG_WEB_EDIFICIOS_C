<?php

$route = "uploads/";

$route = $route .  basename( $_FILES['file']['name']);

move_uploaded_file($_FILES['file']['name'] , $route);

?>