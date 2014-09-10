<?php
   
if(empty($_POST['user']))
    {
    
        $res=0;
		echo($res);
		return;
    }
     
    if(empty($_POST['pass']))
    {
       
        $res=0;
		echo($res);
		return;
    }
     
    $username = trim($_POST['user']);
    $password = trim($_POST['pass']);
	if(!CheckLoginInDB($username,$password))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=array(2,'b');
    echo json_encode($res);
	return;
   function CheckLoginInDB($username,$password)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
    $pwdmd5 = md5($password);
    $qry = "Select user_id,username, password from users ".
        " where username='$username' and password='$pwdmd5' ";
     
    $result = mysql_query($qry,$conn);
	
	$info = mysql_fetch_array( $result ); 
	
	
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
      
			mysql_close($conn);
        return false;
    }
	mysql_close($conn);
	session_start();
	$_SESSION['user_id']=$info[0];
	$_SESSION['username']=$info[1];
	
	session_write_close();
    return true;
     }
	
?>