<?php
include_once('function.php');
unset($_SESSION['admin']);
unset($_SESSION['AdminName']);
header('Location: login_admin.php');