<?php
setcookie('user', $user['name'], time() - (3600 * 24 * 365), "/");

header('Location: /');
?>