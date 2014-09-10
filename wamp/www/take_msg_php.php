<?php
   

     

      session_start();
$id=$_SESSION['user_id'];
$usr=$_POST['usr'];
	if(!CheckInDB($id,$usr))
    {
         
		return;
    }
     

	 
	
	return;
   function CheckInDB($id,$usr)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	$r=$_SESSION['username'];
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
    
	$qry1 = "Select user_id from users ".
        " where username='$usr' ";
     
    $result1 = mysql_query($qry1,$conn);
	
	$info1 = mysql_fetch_array( $result1 );

    
	$qry = "select message from messages where (`dest`='$id' AND `sursa`='$info1[0]') OR (dest='$info1[0]' AND sursa='$id')";
     
    $result = mysql_query($qry,$conn);
	
	
	$dServer = array();

     while($row = mysql_fetch_assoc($result))
      {
           
		   $dServer[] = $row['message'];
			  
		
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