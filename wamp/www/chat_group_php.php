<?php
   

     

      session_start();
$num=$_POST['name'];
$id=$_SESSION['user_id'];
	if(!CheckInDB($num,$id))
    {
       
		return;
    }
     

	 
	
	return;
   function CheckInDB($num,$id)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	$qry1 = "Select group_id from groups ".
        " where name='$num' and user_id='$id'";
     
    $result1 = mysql_query($qry1,$conn);
	
	
    $info = mysql_fetch_array( $result1 );

	
     $qry = "Select friend_id from users_groups ".
        " where group_id='$info[0]' and user_id='$id'";
     
    $result = mysql_query($qry,$conn);
	
	
	$dServer = array();

     while($row = mysql_fetch_assoc($result))
      {
              $dServer[] = $row['friend_id'];
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