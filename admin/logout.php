<?php
	
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>logout</title>
</head>

<body>
<?php

session_destroy();
session_unset();
echo"<meta http-equiv= refresh content=0;URL=index.html>";
echo"กำลังออกจากระบบ...";

?>
</body>
</html>