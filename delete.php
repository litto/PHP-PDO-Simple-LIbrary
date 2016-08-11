<?php
require_once("db.php");
$id=$_GET['id'];
 $person  = new Employee();
$person->Id  = $id;
$deleted     = $person->Delete();
header("Location:index.php");
exit;

?>