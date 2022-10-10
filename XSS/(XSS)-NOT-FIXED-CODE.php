<html>
<body>
<form method="get">
<input type="text" name="name"><br>
<input type="submit">
<?php
//Chack if the `name` premater is Existing or not to hide the errors
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
//Welcome Message
echo '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
}
?> 
</form>
</body>
</html>