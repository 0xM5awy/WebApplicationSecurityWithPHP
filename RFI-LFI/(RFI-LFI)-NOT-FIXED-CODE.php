<form action="" method="get">
<select name="lang"> 
<option value="lang-1.php">English</option>
<option value="lang-2.php">Arabic</option>
</select>
<input type="submit" name="submit" value="Click"/>
</form>
<?php 
if( array_key_exists( "lang", $_GET ) && $_GET[ 'lang' ] != NULL )
{
$lang = $_GET['lang'];
include ($lang); 
}
?>