<?php
   

     

      session_start();
	   $username = trim($_POST['user']);
   $firstname = trim($_POST['first']);
	$lastname = trim($_POST['last']);
	if(!CheckInDB($username,$firstname,$lastname))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($username,$firstname,$lastname)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	var_dump($username);
     $qry = "Select user_id,username from users ".
        " where username='$username' ";
     
    $result = mysql_query($qry,$conn);
	
	$info = mysql_fetch_array( $result ); 
	
	var_dump($info[0]);
	
    $qryy= "INSERT INTO  profile".
	"(user_id,first_name,last_name) ".
    "VALUES('$info[0]','$firstname','$lastname')";
     
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