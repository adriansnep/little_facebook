<?php
   

     

      session_start();
	$id=$_SESSION['user_id'];
    $password = trim($_POST['pass']);
	$username = trim($_POST['user']);
	if(!CheckInDB($id,$password,$username))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($id,$password,$username)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
    $pwdmd5 = md5($password);
    $qry = "INSERT into  users ".
	"(username,password) ".
    "VALUES('$username','$pwdmd5')";
     
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