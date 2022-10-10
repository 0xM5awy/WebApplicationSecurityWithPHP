<?php
if( isset( $_GET['next'] ) ) 
{
$page = $_GET['next'];
#check weather it is 'domain/endpoint you want' or not. If the value is other than 'domain/endpoint you want' then redirect them all to your desired location.
if($page != 'Domain/Endpoint you want') 
{
// Change the text with your url
header("Location:https://quotesbook.com/images/quotes/preview/funny-meme-hey-what-are-you-doing-4418.jpg"); 
}
}
?>
