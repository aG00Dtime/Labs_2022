<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    echo "This is a GET";
} else if ($method == "POST") {
    echo "This is a POST";
} else {
    echo "This is an unknown Request Method";
}




include("login-form.php");
