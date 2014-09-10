<?php
   

     

      session_start();
	   $name = trim($_POST['username']);
       $id= $_SESSION['user_id'];
	if(!CheckInDB($name,$id))
    {
         
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($name,$id)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	 $r=$_SESSION['username'];
    $qryy= "INSERT INTO  friend_req".
	"(usr_name,friend_name) ".
    "VALUES('$name','$r')";
     
    $result = mysql_query($qryy,$conn);
	
	$info2 = mysql_fetch_array( $result ); 
	
	
    
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