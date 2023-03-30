<?php
session_start();
if(!$_SESSION['email_login_f']) {
    header('Location: index.php');
    exit();
}
