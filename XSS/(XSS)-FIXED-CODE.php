<html>
<body>
<form method="get">
<input type="text" name="name"><br>
<input type="submit">
<?php
//Chack if the name premater is Existing or not to hide the errors
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
//3 ways to protect the code ( just remove the comment `//`)
$name = htmlentities( $_GET[ 'name' ] );
//$name = htmlspecialchars( $_GET[ 'name' ] );
//$name = strip_tags( $_GET[ 'name' ] );
//Welcome Message
echo "<pre>Hello ${name}</pre>";
}
?> 
</form>
</body>
</html>