<html>
<title> LA CLB DEMO </title>
<body>
<h1>
<center>
<IMG SRC="dog.jpg" width="800" height="400" ALT="omg"><br>
<?php
$eip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
echo "Publci IP: "$eip;
$lip = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');
echo "Local IP: "$lip;
?>
</center>
</h1>
</body>
</html>