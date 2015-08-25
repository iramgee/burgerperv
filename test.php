<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
 $purl = $_GET['purl'];
?>
go to your purl, <a href="<?php echo 'http://'.$purl.'.testmaml.m.mdl.io/tjmaxx'; ?>" target="_blank">here</a><br>

<?php

print_r($_GET);
?>
<br>
<?php
echo $purl;
?>

</body>
</html>
