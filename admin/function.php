<?php
session_start();

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function enc_pw($p) {
    $salt = 'lib';
    return sha1($salt.$p);
}