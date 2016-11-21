<?php
//An associative array of variables passed to the current script via HTTP Cookies.
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
?>