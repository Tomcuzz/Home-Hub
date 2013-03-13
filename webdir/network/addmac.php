<?php
$mac = mysql_real_escape_string( $_POST["user_mac"] );
$name = mysql_real_escape_string( $_POST["user_name"] );

 $server = "localhost";
  $username = "status";
  $password = "status";
  $database = "734status";
  $con = mysql_connect($server, $username, $password);
  $ok = mysql_select_db($database, $con);
      
    $sql = "UPDATE network SET Name='$name' WHERE MACAddress='$mac'";
    mysql_query($sql) or die(mysql_error());
    
header( 'Location: ./' ) ;
?>