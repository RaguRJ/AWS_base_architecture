<html>
<title> LA CLB DEMO </title>
<body>
<h1>
<center>
<IMG SRC="dog.jpg" ALT="omg"><br>
<?php
$eip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
echo $eip;
$lip = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');
echo $lip;
?>
</center>
</h1>
</body>
</html>