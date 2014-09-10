<?php
   
    session_start();
	$id=$_SESSION['user_id'];
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$munca=$_POST['munca'];
	$scoala=$_POST['scoala'];
	$loc=$_POST['loc'];
	$mail=$_POST['mail'];
	if(!CheckInDB($id,$nume,$prenume,$munca,$scoala,$loc,$mail))
    {
         $res=array(2,'b');
    echo json_encode($res);
		return;
    }

	
	return;

   function CheckInDB($idd,$nume,$prenume,$munca,$scoala,$loc,$mail)
      {
	$hostname_conn = "localhost";
	$database_conn = "tema_web";
	$username_conn = "root";
	$password_conn = "";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conn, $conn);
	
	var_dump($nume);
    $qry = "UPDATE profile ".
	"SET first_name = '$nume',last_name='$prenume',work_at='$munca',school='$scoala',live_in='$loc',`e-mail`='$mail' ".
        " where user_id='$idd'  ";
     
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