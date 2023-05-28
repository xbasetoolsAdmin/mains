<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass']))
{
				header("location: ../");
				exit();
} //!isset($_SESSION['sname']) and !isset($_SESSION['spass'])
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$uid   = mysqli_real_escape_string($dbcon, $_SESSION['sname']);


$sql = "CREATE TABLE `members` (\n"

    . " `id` int(11) NOT NULL AUTO_INCREMENT,\n"

    . " `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,\n"

    . " `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,\n"

    . " `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,\n"

    . " `gender` enum(\'Male\',\'Female\') COLLATE utf8_unicode_ci NOT NULL,\n"

    . " `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,\n"

    . " `created` datetime NOT NULL,\n"

    . " `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT \'1=Active | 0=Inactive\',\n"

    . " PRIMARY KEY (`id`)\n"

    . ") ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
[ Without PHP code ] [ Submit query ]
