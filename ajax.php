<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){   header("location: ../");   exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket where status='1' and uid='$usrid'");
$r1=mysqli_num_rows($s1);


$myObj =new stdClass();
$myObj->premium = "$r10";


$q = mysqli_query($dbcon, "SELECT reseller FROM users WHERE username='$usrid'");$r = mysqli_fetch_assoc($q);  $reselerif = $r['resseller']; if ($reselerif == "1") {           $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$usrid'");          $r = mysqli_fetch_assoc($q); $seller = $r['soldb']; $myObj->seller = "$$seller";		 	   } else { }
$myJSON = json_encode($myObj);

echo $myJSON;
?>
//
<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){   header("location: ../");   exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket where status='1' and uid='$usrid'");
$r1=mysqli_num_rows($s1);


$myObj =new stdClass();
$myObj->premium = "$r10";


$q = mysqli_query($dbcon, "SELECT reseller FROM users WHERE username='$usrid'");$r = mysqli_fetch_assoc($q);  $reselerif = $r['resseller']; if ($reselerif == "1") {           $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$usrid'");          $r = mysqli_fetch_assoc($q); $seller = $r['soldb']; $myObj->seller = "$$seller";		 	   } else { }
$myJSON = json_encode($myObj);

echo $myJSON;
?>

