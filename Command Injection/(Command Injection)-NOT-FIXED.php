<?php
//get a host based on the user input
$host = strlen($_GET['host']) > 0 ? $_GET['host'] : '127.0.0.1';
//pass the host into a ping command without input sanitization,
//making it vulnerable to Command Injection.
echo shell_exec('ping -t 3 ' . $_GET['host']);
?>