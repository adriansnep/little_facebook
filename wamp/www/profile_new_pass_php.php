<?php
   

     

      session_start();
	$id=$_SESSION['user_id'];
    $password = trim($_POST['pass']);
	if(!CheckInDB($id,$password))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($id,$password)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	var_dump($password);
    $pwdmd5 = md5($password);
    $qry = "UPDATE users ".
	      "SET password='$pwdmd5' ".
        " where user_id='$id'  ";
     
    $result = mysql_query($qry,$conn);
	
	$info = mysql_fetch_array( $result ); 
	
	
    
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