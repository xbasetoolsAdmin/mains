<?php

$host = "localhost"; /* Host name */
$user = "xbaseleets_xbaseleets"; /* User */
$password = "xbaseleets_xbaseleets"; /* Password */
$dbname = "xbaseleets_employeesTable"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}