<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="You have logged out successfully..!";
header("Location:../" )

?>
<!-- <script language="javascript">
document.location="index.php";

</script> -->

