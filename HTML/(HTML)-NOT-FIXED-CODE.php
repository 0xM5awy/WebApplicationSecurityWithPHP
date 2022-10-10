<form method="GET">
<p><label for="firstname">First name:</label><br />
<input type="text" id="firstname" name="firstname"></p>
<p><label for="lastname">Last name:</label><br />
<input type="text" id="lastname" name="lastname"></p>
<button type="submit" name="form" value="submit">Go</button>  
</form>
<?php
//Chack if the `firstname` & `lastname` premater is Existing or not to hide the errors
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
//Welcome Message
echo "Welcome " . $firstname . " " . $lastname;  
}
}
?>