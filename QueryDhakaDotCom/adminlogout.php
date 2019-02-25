<?php
session_start();

unset($_SESSION['adminname']);
session_unset();
session_destroy();
header('location:adminindex.php');