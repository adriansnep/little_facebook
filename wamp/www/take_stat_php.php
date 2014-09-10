<?php
   

     

      session_start();
     $id=$_POST['iddt'];
	if(!CheckInDB($id))
    {
         
	 $res='nu';
	echo json_encode($res);
		return;
    }
     
   $res='da';
	echo json_encode($res);
	return;
   function CheckInDB($id)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	$r=$_SESSION['username'];
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	     $qry1 = "Select user_id from users ".
        " where username='$id' ";
     
    $result1 = mysql_query($qry1,$conn);
	
	$info = mysql_fetch_array( $result1 );
	
     $qry = "Select user_id from log_in ".
        " where user_id='$info[0]' ";
     
    $result = mysql_query($qry,$conn);
	
	
	
	  
	
	
	
	
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
        
			mysql_close($conn);
        return false;
    }
	mysql_close($conn);
	
	session_write_close();
    return true;
     }
	
?>