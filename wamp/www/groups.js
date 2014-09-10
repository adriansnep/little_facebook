$(document).ready(function(){
$("#grppp").click(function(e){

		ajaxCall(
			'groups.php',
			'#grp',
			function() {}
		);

});
$(".picture_grpp").click(function(e){
  var id=event.target.id;
  document.getElementById("cht3").innerHTML="";
 
		ajaxCall(
			'grp1.php',
			'#friends',
			function() {
			ajaxCall(
			'groups.php',
			'#grp',
			function() {
			document.getElementById("num").innerHTML="Students";}
		);
			}
		);
    
});
$(".picture_grppp").click(function(e){
  var id=event.target.id;
  document.getElementById("cht3").innerHTML="";

 

		ajaxCall(
			'grp2.php',
			'#friends',
			function() {
			ajaxCall(
			'groups.php',
			'#grp',
			function() {
			 document.getElementById("num").innerHTML="Close friends";}
		);
			}
		);
    
});
$("#add_grp").click(function(event) {
  
 
 document.getElementById("add_grp").style.visibility='hidden';
 document.getElementById("del_grp").style.visibility='hidden';
 document.getElementById("add_frd_grp").style.visibility='hidden';
 
      ajaxCall(
			'grp2.php',
			'#but',
			function() {
			
			}
		);
  
});
$("#del_grp").click(function(event) {
  
 
 document.getElementById("add_grp").style.visibility='hidden';
 document.getElementById("del_grp").style.visibility='hidden';
 document.getElementById("add_frd_grp").style.visibility='hidden';
 
      ajaxCall(
			'grp3.php',
			'#but',
			function() {
			
			}
		);
  
});
$("#add_frd_grp").click(function(event) {
  
 
 document.getElementById("add_grp").style.visibility='hidden';
 document.getElementById("del_grp").style.visibility='hidden';
 document.getElementById("add_frd_grp").style.visibility='hidden';
 
      ajaxCall(
			'grp4.php',
			'#but',
			function() {
			
			}
		);
  
});
});