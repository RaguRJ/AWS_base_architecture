<html>
<title> LA CLB DEMO </title>
<body>
<h1>
<center>
<br>
<IMG SRC="dog.jpg" width="800" height="600" ALT="omg"><br>
<?php
$eip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
echo "Public IP - $eip";
echo "<br>";
$lip = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');
echo "Local IP - $lip";
echo "<br>";
$hname = file_get_contents('http://169.254.169.254/latest/meta-data/local-hostname');
$sg = file_get_contents('http://169.254.169.254/latest/meta-data/security-groups');
echo "Hostname - $hname";
echo "<br>";
echo "Security-Group - $sg";
?>
</center>
</h1>
</body>
</html>