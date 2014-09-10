$(document).ready(function(){
$("#ad_grp").click(function(e){

if(document.getElementById("fst_nm2").value!="")
{

  $.post("send_request_php.php",{name:document.getElementById("fst_nm2").value}).done(function(data){
  window.location.href="chat.php";
  });
 
}
else
{
alert:("Please enter a name");
}

});
});