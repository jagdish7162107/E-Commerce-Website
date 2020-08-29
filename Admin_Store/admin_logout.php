<?php
session_start();
session_unset();
session_destroy();
header('location:admin_login.php?id="logout successfully"');
echo "logout successfully";
?>