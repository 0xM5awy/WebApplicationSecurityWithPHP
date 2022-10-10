<html>
<body>
<?php echo "<font color=\"red\">Please enter both fields to change it...</font>"; ?>
<form method="get">
Username:<input type="text" name="Username"><br>
Password:<input type="password" name="password"><br>
<input type="submit">
<?php
if(isset($_GET["Username"]) && isset($_GET["password"])) {
$Username = htmlspecialchars( $_GET[ 'Username' ] );
$password =  htmlspecialchars($_GET[ 'password' ]) ;
echo "<br> Your New Username " . $Username . "<br> Your New Password " . $password;  
}
?> 
</form>
</body>
</html>