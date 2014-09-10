$(document).ready(function(){
$("#ad_grp").click(function(e){

if(document.getElementById("fst_nm2").value!="")
{
  $.post("profile_del_group_php.php",{name:document.getElementById("fst_nm2").value}).done(function(data){
  window.location.reload(true);
  });
 
}
else
{
alert:("Please enter a name");
}

});
});