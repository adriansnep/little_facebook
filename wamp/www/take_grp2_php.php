<?php
   

     

      session_start();
$id=$_POST['id'];
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
     $qry = "Select * from groups ".
        " where group_id='$id' ";
     
    $result = mysql_query($qry,$conn);
	
	
	  
	$info = mysql_fetch_array( $result ); 
	
	
	echo json_encode($info[2]);
	
	
	
    
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