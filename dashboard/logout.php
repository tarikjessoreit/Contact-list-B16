<?php
setcookie('userID', '', time() - 3600, '/');
setcookie('username', '', time() - 3600, '/');
setcookie('loginstatus', '', time() - 3600 * 7, '/');
header('location:../');
?>