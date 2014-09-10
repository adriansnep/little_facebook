$(document).ready(function(){
$("#ad_grp").click(function(e){

if(document.getElementById("fst_nm1").value!="")
{
  $.post("profile_new_group_php.php",{name:document.getElementById("fst_nm1").value}).done(function(data){
  window.location.reload(true);
  });
 
}
else
{
alert:("Please enter a name");
}

});
});