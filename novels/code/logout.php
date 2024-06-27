<!DOCTYPE html>
<html lang="en">
<head>
    <title>logout</title>
</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
header("Location:front page.php"); // Redirect to login page after logout

?>
</body>
</html>