<?php
   
    session_start();
	$nm=$_POST['username'];
	if(!CheckInDB($nm))
    {
         $res=array(2,'b');
    echo json_encode($res);
		return;
    }

	
	return;

   function CheckInDB($nm)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	$qry1 = "Select user_id from users ".
        " where username='$nm' ";
     
    $result1 = mysql_query($qry1,$conn);
	
	$info1 = mysql_fetch_array( $result1 ); 
	
    $qry = "Select first_name,last_name,work_at,school,live_in,`e-mail` from profile ".
        " where user_id='$info1[0]'  ";
     
    $result = mysql_query($qry,$conn);
	
	$info = mysql_fetch_array( $result ); 
	
	$res=array($info[0],$info[1],$info[2],$info[3],$info[4],$info[5]);
    echo json_encode($res);
	
    
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