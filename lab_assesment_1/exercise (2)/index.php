<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

    include("page1.php");
    header("Location: page1.php");
} else if ($method == "POST") {

    include("page2.php");
} else {
    echo "This is an unknown Request Method";
}
