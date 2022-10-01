<?php


if (filter_has_var(INPUT_POST, "username") and  filter_has_var(INPUT_POST, "password")) {
    echo '<script>alert("Logged in!")</script>';
    include("index.php");
}
