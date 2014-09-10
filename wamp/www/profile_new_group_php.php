<?php
   

     

      session_start();
	   $name = trim($_POST['name']);
       $id= $_SESSION['user_id'];
	if(!CheckInDB($name,$id))
    {
         $res=1;
		echo($res);
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
	
	
    $qryy= "INSERT INTO  groups".
	"(user_id,name) ".
    "VALUES('$id','$name')";
     
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