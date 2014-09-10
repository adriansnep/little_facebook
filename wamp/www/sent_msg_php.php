<?php
   

     

      session_start();
	$id=$_SESSION['user_id'];
    $usr = trim($_POST['usr']);
	$msg = trim($_POST['msg']);
	if(!CheckInDB($id,$msg,$usr))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($id,$msg,$usr)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	$qry1 = "Select user_id from users ".
        " where username='$usr' ";
     
    $result1 = mysql_query($qry1,$conn);
	
	$info1 = mysql_fetch_array( $result1 );
    
    $qry = "INSERT into  messages ".
	"(sursa,dest,message) ".
    "VALUES('$id','$info1[0]','$msg')";
     
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