<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("datos.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("datos.txt"));
fclose($myfile);
?>

</body>
</html>