<?php
   

     

      session_start();
$id=$_SESSION['user_id'];
	if(!CheckInDB($id))
    {
         
		return;
    }
     

	 
	
	return;
   function CheckInDB($id)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
     $qry = "Select user_id from users ";
     
    $result = mysql_query($qry,$conn);
	
	
	$dServer = array();

     while($row = mysql_fetch_assoc($result))
      {
              $dServer[] = $row['user_id'];
      }  
	  
	echo json_encode($dServer);
	
	
    
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