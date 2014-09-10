<?php
   

     

      session_start();
	   $frd_name = trim($_POST['frd_name']);
	   $grp_name = trim($_POST['grp_name']);
       $id= $_SESSION['user_id'];
	if(!CheckInDB($frd_name,$id,$grp_name))
    {
         $res=1;
		echo($res);
		return;
    }
     

	 
	$res=2;
    echo json_encode($res);
	return;
   function CheckInDB($frd_name,$id,$grp_name)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	
	$qry1 = "Select group_id from groups ".
        " where name='$grp_name' ";
     
    $result1 = mysql_query($qry1,$conn);
	
	
    $info1 = mysql_fetch_array( $result1 );
	$qry2 = "Select user_id from users ".
        " where username='$frd_name' ";
     
    $result2 = mysql_query($qry2,$conn);
	
	
	
	
	
	
    $info2 = mysql_fetch_array( $result2 );
	
	
	var_dump($id);
    $qryy= "INSERT INTO  users_groups".
	"(user_id,group_id,friend_id) ".
    "VALUES('$id','$info1[0]','$info2[0]')";
     
    $result = mysql_query($qryy,$conn);
	
	$info3 = mysql_fetch_array( $result ); 
	
	
    
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