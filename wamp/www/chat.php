<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8" />
	   <title>Chat</title>
	   
	    <!-- JS libraries (Internet) -->
	   <script src="js/lib/jquery-1.9.1.js"></script>
		<script src="js/lib/jquery-ui.js"></script>
		
		<!-- JS libraries (own) -->
		<script src="js/ajax.js"></script>
		
		<link rel="stylesheet" href="css/base/jquery-ui.css">
		
		<link href="chat.css" rel="stylesheet">
		 <script type="text/javascript" src="chat.js"></script>
		
   </head>
   
   <body>
   <h1 ></h1>
<nav>
    <ul>
        <li><a href="chat.php">Friends</a></li>
        <li><a  href="#" id="grppp">Groups</a></li>
        <li><a href="#">Conference</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li ><a href="#" id="out">Log Out</a></li>
    </ul>
</nav>
   
      <div id="chat_window">
	    <p name="mess" >Welcome to SnapChat!!!</p>
		<p name="mess2" >Powered by SnapChat</p>
		
	    <textarea id="cht" placeholder="Type here......." ></textarea>
         <div  id="cht2"  >
		 <div id="cht3"></div>
		 </div>
     </div>
   <div id="img"></div>
     <div id="friends">
	 <p name="frd" id="frr">Friends</p>
	 <div id="zone" type="submit" >
	 </div>
	 
	
	 
	  <input type="button" id="frd_add" value="Add friend" name="ch1" />
	  
	  
	 </div>
	 <div id="grp">
	 
	 </div>
	 <input type="button" id="view_prf" value="View profile" name="ch1" />
	 <input type="button" id="req" value="Send request" name="ch1" />
	 <div id="num"></div>
	  <div id="inf"><?php
	session_start();
	$usr=$_SESSION['username'];
	session_write_close();
	echo($usr);?></div>
     <div id="imgg2"></div>
	 <input type="button" id="change" value="Send" name="ch1" />
	 <input type="button" id="change2" value="Send file..." name="ch1" />
   </body>
   
   
</html> 