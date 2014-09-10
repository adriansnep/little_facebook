$(document).ready(function(){
$("#ad_grp").click(function(e){

if(document.getElementById("fst_nm3").value!="")
{
if(document.getElementById("fst_nm3").value!="")
{
  $.post("add_frd_togrp_php.php",{frd_name:document.getElementById("fst_nm3").value,grp_name:document.getElementById("fst_nm4").value}).done(function(data){
 window.location.reload(true);
  });
}
else
{
alert:("Please enter  a group_name");
}
}
else
{
alert:("Please enter  a friend_name");
}

});
});