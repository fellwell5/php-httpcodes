<html CLASS="no-js" LANG="de">
<head>
<meta CHARSET="utf-8" />
<title>HTTP STATUS CODES</title>
</head>
<body>
<?php
include "./src/httpcode.php";
$code = "404";
echo "Code: ";
echo $code;
echo "<br>";
echo "Nachricht: ";
echo httpmsg($code);
echo "<br>";
echo "Bedeutung: ";
echo httpmean($code);
echo "<br>";
?>
</body>
</html>