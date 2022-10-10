<form method="GET">
<p><label for="firstname">First name:</label><br />
<input type="text" id="firstname" name="firstname"></p>
<p><label for="lastname">Last name:</label><br />
<input type="text" id="lastname" name="lastname"></p>
<button type="submit" name="form" value="submit">Go</button>  
</form>
<?php
if(isset($_GET["firstname"]) && isset($_GET["lastname"]))
{
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];    
if($firstname == "" or $lastname == "")
{
echo "<font color=\"black\">Please enter both fields...</font>";       
}
else            
{ 
//3 ways to protect the code ( just change the way ex : use strip_tags `//`)
echo "Welcome " . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname);  
//$name = htmlentities( $_GET[ 'name' ] );
//$name = strip_tags( $_GET[ 'name' ] ); 
}
}
?>