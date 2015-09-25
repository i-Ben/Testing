<?php
if(isset($_GET['n']))
echo "Salut ".htmlentities($_GET['n']);
else exit();

$name = array("John","Nicolas","Emilie");
if(in_array($_GET['n'],$name))
echo "<br><br>Access Granted";
?>
