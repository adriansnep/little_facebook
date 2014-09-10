<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8" />
	   <title>Profile</title>
	   
	    <!-- JS libraries (Internet) -->
	   <script src="js/lib/jquery-1.9.1.js"></script>
		<script src="js/lib/jquery-ui.js"></script>
		
		<!-- JS libraries (own) -->
		<script src="js/ajax.js"></script>

	   
	   <link href="profile.css" rel="stylesheet">
	   
	 <script type="text/javascript" src="profile2.js"></script>
	
   </head>
   
   <body >
   
     <div id="txt1"> This is how you'll appear to others: </div>
       <div id="img1"></div>   
      <input type="button" id="change" value="Change photo" name="ch1" />
  
     <div id="inf">  <?php
	session_start();
	$usr=$_SESSION["username"];
	session_write_close();
	echo($usr);
	?></div>
     <div id="img2"><div>
     <div id="fst_nm">FirstName:</div>
	 <div id="fst_value">Mihai</div>
     <div id="lst_nm">LastName:</div>
	 <div id="lst_value">Alin</div>
     <div id="work">I work at:</div>
	 <div id="work_value"></div>
	 <div id="school">I went to school at:</div>
	 <div id="school_value"></div>
     <div id="live">I live in:</div>
	 <div id="live_value"></div>
	 <div id="email">E-mail:</div>
	 <div id="email_value"></div>
    <input type="button" id="change2" value="Change acount settings" name="ch2" />
   
   <div id="nr1">
    <div id="firstname">FirstName:
	<input type="text" id="fst_nm1" name="fst_nm" />
	</div>
   </div>
   <div id="nr2">
    <div id="lastname" >LastName:
	<input type="text" id="lst_nm1" name="lst_nm" />
	</div>
   </div>
   <div id="nr3">
    <div id="wrr" >Where do you work?
	<input type="text" id="wrk1" name="wrk_nm" />
	</div>
   </div>
   <div id="nr4">
    <div id="schh" >Where have you gone to school?
	<input type="text" id="sch" name="sch_nm" />
	</div>
   </div>
   <div id="nr5">
    <div id="lvv" >Where do you live?
	<input type="text" id="lve" name="lve_nm" />
	</div>
   </div>
   <div id="nr6">
    <div id="mll" >E-mail:
	<input type="email" id="mail" name="mail_nm" />
	</div>
   </div>
   <div id="ttt">
   <div id="old_password" >Old Password:
	<input type="password" id="pass1" name="passwd1" />
	</div>
	<div id="new_password" >New Password:
	<input type="password" id="pass2" name="passwd2"/>
	</div>
    <div id="ret_password" > Retype New Password:
	<input type="password" id="pass3" name="passwd3" class="box6"/>
	</div>
	<input type="button" id="change3" value="Change password" name="ch3" />
	</div>
	<div id="mesaj2"></div>
	<input type="button" id="change4" value="Back" name="ch3" />
   </body>
   
</html>