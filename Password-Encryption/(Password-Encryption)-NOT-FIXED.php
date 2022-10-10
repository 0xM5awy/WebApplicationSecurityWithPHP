<!-- 
Password protection with only MD5 like this code 
````````````````````````````````````
$Password = 'Mohamed';
$hashedPassword= md5($Password);
echo $hashedPassword;
````````````````````````````````````
And It is not the best way to protect users passwords.
why is not the best way? Because easily an attacker can Decryption the MD5 to get the passwords.
ex: open : https://www.md5online.org/md5-decrypt.html and Enter this md5 hash `bc2ab28e4cda984ca76646874371e864`
It will return the value of the MD5 hashed Password `Mohamed`.
-->
<?php
$Password = 'Mohamed';
$hashedPassword= md5($Password);
echo $hashedPassword;
?>