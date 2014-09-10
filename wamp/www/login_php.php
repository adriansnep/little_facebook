<?php
   

     

      session_start();
       $id= $_SESSION['user_id'];
	if(!CheckInDB($id))
    {
         
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($id)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	 $r=$_SESSION['username'];
    $qryy= "INSERT INTO  log_in".
	"(user_id) ".
    "VALUES('$id')";
     
    $result = mysql_query($qryy,$conn);
	
	
	
	
    
   
	mysql_close($conn);
	
	session_write_close();
    return true;
     }
	
?>