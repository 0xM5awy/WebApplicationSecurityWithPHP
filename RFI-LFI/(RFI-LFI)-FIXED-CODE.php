<!-- THE FIRST WAY TO FIX THIS -->
<!-- is to use array of the allowed files you want :)) -->
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
$allowedpages = array ('lang-1.php', 'lang-2.php');
$lang = $_GET['lang'];
if (in_array($lang,$allowedpages)):
include ($lang);
else:
echo "bad hacker";
endif;
}
?>
<!-- THE SECOUND WAY TO FIX THIS -->
<!--
1.Open your coinfig file in the apache sever.
2.serach for `allow_url` and made it off :)
3.Look at <img src=Secound-way.png> so you can understand what i mean :))
-->

