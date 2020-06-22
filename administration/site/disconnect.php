<?php
require_once '../app/class/login.php';
session_start();

\Administration\app\Login::disconnect();
header('location: /administration/index.php');