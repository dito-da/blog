<?php
header("Location: index.html");
$ADEx = "masukan.php";
$ADEy = $_POST['name'];
$ADEz = $_POST['email'];
$ADEz = $_POST['pesan'];


$handle = fopen($ADEx, 'a');
fwrite($handle, "\n");
fwrite($handle, "<br>Name  :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "<br>Email :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "<br>Pesan  :");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>