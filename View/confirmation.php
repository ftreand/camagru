<?php

include "header.php";
include "../config/database.php";

if (isset($_GET) && !empty($_GET['cle']) &&!empty($_GET['cle']) && $_SESSION['cle'] === $_GET['cle']){
    database_confirmation_account($_GET['log'], $_GET['cle']);
    header("Location: ../View/");
}