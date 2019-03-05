<?php
include ("../Controller/User.php");
session_start();
session_destroy();
delete_account($_SESSION['login']);
header("Location: ../View/");