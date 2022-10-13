<?php
if(isset( $_POST[ 'Submit' ]  ) ) {
// Get input
$target = $_REQUEST[ 'ip' ];
$target = stripslashes( $target );
// Split the IP into 4 octects
$octet = explode( ".", $target );
// Check IF each octet is an integer
if( ( is_numeric( $octet[0] ) ) && ( is_numeric( $octet[1] ) ) && ( is_numeric( $octet[2] ) ) && ( is_numeric( $octet[3] ) ) && ( sizeof( $octet ) == 4 ) ) {
// If all 4 octets are int's put the IP back together.
$target = $octet[0] . '.' . $octet[1] . '.' . $octet[2] . '.' . $octet[3];
// Determine OS and execute the ping command.
if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
// Windows
$cmd = shell_exec( 'ping  ' . $target );
}
else {
// *nix
$cmd = shell_exec( 'ping  -c 4 ' . $target );
}
// Feedback for the end user
echo "<pre>{$cmd}</pre>";
}
else {
// Ops. Let the user name theres a mistake
echo '<pre>ERROR: You have entered an invalid IP.</pre>';
}
}
?>
