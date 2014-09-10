$(document).ready(function(){
var frds=[];
var length=0;
document.getElementById("req").style.visibility='hidden';
$("#grppp").click(function(e){
document.getElementById("num").innerHTML="";
ajaxCall(
			'groups.php',
			'#grp',
			function() {
                  }			
		);
	var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
		//$.post("take_grp_php.php",{}).done(function(data){
$.ajax({
						url: "http://" + wsIp + ":" + wsPort + "/chat/"+username,
						type: "POST",
						dataType: "json",
						success: function(data){
						
						var response = data;
//var response = jQuery.parseJSON(data);
							var sep=[];
							var ok=1;
							var c=0;
							for( var i=0;i<response.length;i++)
							{
							ok=1;
							   for(var j=0;j<sep.length;j++)
								 if(sep[j]==response[i])
								   ok=0;
								   if(ok==1)
									 {
									 sep[c]=response[i];c++;
									 }
                            }
									for( var i=0;i<sep.length;i++)
									{
									if(sep[i]!=0)
									{
									  //$.post("take_grp2_php.php",{id:sep[i]}).done(function(data){
									  //var response = jQuery.parseJSON(data);
									  $.ajax({
									url: "http://" + wsIp + ":" + wsPort + "/chat/"+username+"/"+sep[i],
									type: "POST",
											dataType: "json",
										  success: function(data){
										  var response=data;
												  var str="";
												   str=str+"<div ><span  class=\"picture_grppp\" ></span> <span  class=\"frdd2\" >"+response+"</span></div>"
													 if(document.getElementById("gr").innerHTML!="")
													 {
													  total=document.getElementById("gr").innerHTML+str;
													 }
													 else
													 {
													 total =str;
													 }
													 document.getElementById("gr").innerHTML=total;
													},
									error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
												  });
									  }
									}
									},
									error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
});
});

$("#grp").click(function(event){

  var num=event.target.innerHTML;
  	var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
  
   if( num.length<40 && num!="" && num!="Groups")
  {
  document.getElementById("zone").innerHTML="";
  document.getElementById("frr").innerHTML="Members"
  
 // $.post("chat_group_php.php",{name:num}).done(function(data){
 $.ajax({
						url: "http://" + wsIp + ":" + wsPort + "/chat2/"+username+"/"+num,
						type: "POST",
						dataType: "json",
						success: function(data){
								var response = data;
								var sep=[];
								var ok=1;
								var c=0;
								for( var i=0;i<response.length;i++)
								{
								ok=1;
								   for(var j=0;j<sep.length;j++)
									 if(sep[j]==response[i])
									   ok=0;
									   if(ok==1)
										 {
										 sep[c]=response[i];c++;
										 }
								}
								for( var i=0;i<sep.length;i++)
								{
								 // $.post("take_friend_php.php",{id:sep[i]}).done(function(data){
								  //var response = jQuery.parseJSON(data);
								   $.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat2/"+sep[i],
						type: "POST",
						dataType: "json",
						success: function(data){
								var response = data;
								  var str="";
								   str=str+"<div ><span  class=\"picture\" ></span> <span  class=\"frdd\" >"+response+"</span></div>"
									 if(document.getElementById("zone").innerHTML!="")
									 {
									  total=document.getElementById("zone").innerHTML+str;
									 }
									 else
									 {
									 total =str;
									 }
									 document.getElementById("zone").innerHTML=total;
									},
									error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
								  });
								}
								},
								error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
});


  }
});

$("#zone").click(function(event) {
  
  
  var num=event.target.innerHTML;
  document.getElementById("cht3").innerHTML="";
  if( num.length<40 && num!="")
  {
    document.getElementById("num").innerHTML=num;
	
	take_msg();
	
	//var myVar2 = setInterval(function(){take_msg()}, 3000);
	
  }
  
});
$("#req").click(function(event) {
  var m=document.getElementById("num").innerHTML;
  var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
  if(document.getElementById("num").innerHTML=="")
  {
  alert("Please select a friend");
  }
  else
  {
  var crf="confirmat";
     //$.post("send_request_php.php",{username:m}).done(function(data){
	 $.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat2/"+username+"/"+m+"/"+crf,
						type: "POST",
						dataType: "json",
						success: function(data){
	            window.location.reload(true);
				},
			error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}		
	 });
	 
  }
  
});

$("#out").click(function(event) {
 var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;

 //$.post("del_log_php.php",{}).done(function(data){
 $.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username,
						type: "POST",
						dataType: "json",
						success: function(data){	 
	 
	 
						 ajaxCall(
									'index.php',
									'body',
									function() {}
								);
								},
								error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
  });
});
$("#frd_add").click(function(event) {
document.getElementById("zone").innerHTML=""
  document.getElementById("num").innerHTML="";
  document.getElementById("frr").innerHTML="Select from";
  document.getElementById("req").style.visibility='visible';
  document.getElementById("frd_add").style.visibility='hidden';
  document.getElementById("chat_window").style.visibility='hidden';
  document.getElementById("view_prf").style.visibility='hidden';
  document.getElementById("img").style.visibility='hidden';
  document.getElementById("num").style.visibility='hidden';
  document.getElementById("change").style.visibility='hidden';
  document.getElementById("change2").style.visibility='hidden';
  
//$.post("chat_friends3_php.php",{}).done(function(data){
var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
	
//var response = jQuery.parseJSON(data);
var vr=2;
$.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username+"/"+vr,
						type: "POST",
						dataType: "json",
						success: function(data){	
                                    var response=data;						
									var sep=[];
									var ok=1;
									var c=0;
									for( var i=0;i<response.length;i++)
									{
									ok=1;
									   for(var j=0;j<sep.length;j++)
										 if(sep[j]==response[i])
										   ok=0;
										   if(ok==1)
											 {
											 sep[c]=response[i];c++;
											 }
									}
									var vr=2;
									var vcc=3;
									//$.post("chat_friends4_php.php",{}).done(function(data){
									//var response = jQuery.parseJSON(data);
									$.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username+"/"+vr+"/"+vcc,
						type: "POST",
						dataType: "json",
						success: function(data){	
                                    var response=data;	
									for( var i=0;i<sep.length;i++)
									{
									ok=1;
									   for(var j=0;j<frds.length;j++)
										 if(frds[j]==sep[i])
										   ok=0;
										   if(ok==0)
											 {
											 sep[i]=0;
											 }
									}
									for( var i=0;i<sep.length;i++)
									{
									if(sep[i]!=0)
									{
									 // $.post("take_friend_php.php",{id:sep[i]}).done(function(data){
						$.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat2/"+sep[i],
						type: "POST",
						dataType: "json",
						success: function(data){
								var response = data;
									  if(response!=document.getElementById("inf").innerHTML)
									  {
									  var str="";
									   str=str+"<div ><span  class=\"picture\" ></span> <span  class=\"frdd\" >"+response+"</span></div>"
										 if(document.getElementById("zone").innerHTML!="")
										 {
										  total=document.getElementById("zone").innerHTML+str;
										 }
										 else
										 {
										 total =str;
										 }
										 document.getElementById("zone").innerHTML=total;
										}
										},
										error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
									  });
									}
									}
									},
									error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
									});
									},
									error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
});
	
  
});
$("#view_prf").click(function(event) {
var num=document.getElementById("num").innerHTML;
var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
  if(document.getElementById("num").innerHTML=="")
  {
  alert("Please select a friend");
  }
  else
  {
  ajaxCall(
			'profile2.php',
			'body',
			function() {
			document.getElementById("nr1").style.visibility='hidden';
            document.getElementById("nr2").style.visibility='hidden';
            document.getElementById("nr3").style.visibility='hidden';
			document.getElementById("nr4").style.visibility='hidden';
            document.getElementById("nr5").style.visibility='hidden';
            document.getElementById("nr6").style.visibility='hidden';
			document.getElementById("ttt").style.visibility='hidden';
            document.getElementById("change2").style.visibility='hidden';
            document.getElementById("change").style.visibility='hidden';
			document.getElementById("txt1").style.visibility='hidden';
			//$.post("profile_php_view.php",{username:num}).done(function(data){
			var vr=2;
									var vcc=3;
									
									$.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username+"/"+vr+"/"+vcc+"/"+num,
						type: "POST",
						dataType: "json",
						success: function(data){
						var response=data;
						console.log(response);
						document.getElementById("fst_value").innerHTML=response[0];
						document.getElementById("lst_value").innerHTML=response[1];
						document.getElementById("work_value").innerHTML=response[2];
						document.getElementById("school_value").innerHTML=response[3];
						document.getElementById("live_value").innerHTML=response[4];
						document.getElementById("email_value").innerHTML=response[5];
						},
						error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
						});
			}
		);
		}
		
	
});


  $('#cht').keypress( function( e ) {
  var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
  var code = e.keyCode || e.which;

  if( code === 13 ) {
   var username=document.getElementById("inf").innerHTML;
	

  
   if(document.getElementById("num").innerHTML!="")
   {
   
   var currentdate = new Date(); 
			var datetime = currentdate.getFullYear() + "-"
					+ (currentdate.getMonth()+1)  + "-" 
					+ currentdate.getDate() + " " +
					+ currentdate.getHours() + ":"  
					+ currentdate.getMinutes() + ":" 
					+ currentdate.getSeconds();
					
			
     var mesaj=document.getElementById("cht").value;
	 var mesaj_trans="<div id=\"txtt\" >";
	 mesaj_trans=mesaj_trans+document.getElementById("inf").innerHTML+":"+mesaj;
	 mesaj_trans=mesaj_trans+"</div>";
	 
	 
	 var total="";
	 if(document.getElementById("cht3").innerHTML!="")
	 {
	  total=document.getElementById("cht3").innerHTML+mesaj_trans;
	 }
	 else
	 {
	 total =mesaj_trans;
	 }
	 document.getElementById("cht3").innerHTML=total;
	 document.getElementById("cht").value="";
	 
	 mesaj_trans=mesaj_trans+"<div id=\"txtt\"  style=\"color:red,font-size:10\">wrote at "+datetime+"</div>";
	 var vr=2;
	 var vcc=3;
	 var usr=document.getElementById("num").innerHTML;
	 var num="ccc";
	 var mg=encodeURIComponent(mesaj_trans);
	 //$.post("sent_msg_php.php",{usr:document.getElementById("num").innerHTML,msg:mesaj_trans}).done(function(data){
	 $.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username+"/"+vr+"/"+vcc+"/"+num+"/"+usr+"/"+mg,
						type: "POST",
						dataType: "json",
						success: function(data){
						},
						error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
	 
	 });
   }
   else
   {
     alert("Please choose a friend");
   }
    
  }
});

 $("#change").click(function(e){

  var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;
  var code = e.keyCode || e.which;

  
   if(document.getElementById("num").innerHTML!="")
   {
   
   var currentdate = new Date(); 
			var datetime = currentdate.getFullYear() + "-"
					+ (currentdate.getMonth()+1)  + "-" 
					+ currentdate.getDate() + " " +
					+ currentdate.getHours() + ":"  
					+ currentdate.getMinutes() + ":" 
					+ currentdate.getSeconds();
					
			
     var mesaj=document.getElementById("cht").value;
	 var mesaj_trans="<div id=\"txtt\" >";
	 mesaj_trans=mesaj_trans+document.getElementById("inf").innerHTML+":"+mesaj;
	 mesaj_trans=mesaj_trans+"</div>";
	 
	 
	 var total="";
	 if(document.getElementById("cht3").innerHTML!="")
	 {
	  total=document.getElementById("cht3").innerHTML+mesaj_trans;
	 }
	 else
	 {
	 total =mesaj_trans;
	 }
	 document.getElementById("cht3").innerHTML=total;
	 document.getElementById("cht").value="";
	 
	 mesaj_trans=mesaj_trans+"<div id=\"txtt\"  style=\"color:red,font-size:10\">wrote at "+datetime+"</div>";
	 var vr=2;
	 var vcc=3;
	 var usr=document.getElementById("num").innerHTML;
	 var num="ccc";
	 var mg=encodeURIComponent(mesaj_trans);
	 //$.post("sent_msg_php.php",{usr:document.getElementById("num").innerHTML,msg:mesaj_trans}).done(function(data){
	 $.ajax({
								  url: "http://" + wsIp + ":" + wsPort + "/chat3/"+username+"/"+vr+"/"+vcc+"/"+num+"/"+usr+"/"+mg,
						type: "POST",
						dataType: "json",
						success: function(data){
						},
						error: function(jqXHR, textStatus, errorThrown ){
							console.log(textStatus);
						}	
	 
	 });
   }
   else
   {
     alert("Please choose a friend");
   }
    
  
});

//var myVar = setInterval(function(){init()}, 3000);
init();
function init()
{
//document.getElementById("zone").innerHTML="";

$.post("take_req_php.php",{}).done(function(data){
var username=document.getElementById("inf").innerHTML;
	var wsIp = "localhost";
	var wsPort = 2345;

var response = jQuery.parseJSON(data);

  for(var i=0;i<response.length;i++)
    {
	  var acc=confirm(response[i]+" wants to be your friend.Do you accept?");
	  if(acc==true)
	  {
	    $.post("acc_frd_php.php",{frd_name:response[i]}).done(function(data){
		window.location.reload(true);
		});
		
	  }
	  else
	  {
	   $.post("take_req2_php.php",{frd_name:response[i]}).done(function(data){
		});
	  }
	}
	
});

$.post("chat_friends_php.php",{}).done(function(data){


var response = jQuery.parseJSON(data);
var sep=[];
var ok=1;
var c=0;
for( var i=0;i<response.length;i++)
{
ok=1;
   for(var j=0;j<sep.length;j++)
     if(sep[j]==response[i])
	   ok=0;
	   if(ok==1)
	     {
		 sep[c]=response[i];c++;
		 }
}
$.post("chat_friends2_php.php",{}).done(function(data){
var response = jQuery.parseJSON(data);
for( var i=0;i<response.length;i++)
{
ok=1;
   for(var j=0;j<sep.length;j++)
     if(sep[j]==response[i])
	   ok=0;
	   if(ok==1)
	     {
		 sep[c]=response[i];c++;
		 }
}
frds=sep;
 var ok=0;
for( var i=0;i<sep.length;i++)
{
  var p=sep[i];
  $.post("take_friend_php.php",{id:sep[i]}).done(function(data){
  var response = jQuery.parseJSON(data);
  $.post("take_stat_php.php",{iddt:response}).done(function(data2){
  var response2 = jQuery.parseJSON(data2);
  
  var clr="";
  if(response2=="da")
   clr="green";
   else
   clr="red";
  
  var str="";
   str=str+"<div ><span  class=\"picture\" ></span> <span  class=\"frdd\" style=\"color:"+clr+"\">"+response+"</span></div>"
	 if(document.getElementById("zone").innerHTML!="" && ok>0)
	 {
	  total=document.getElementById("zone").innerHTML+str;
	 }
	 else
	 {
	 total =str;ok++;
	 }
	 document.getElementById("zone").innerHTML=total;
	});
  });
}
});
});
}

function take_msg()
{

$.post("take_msg_php.php",{usr:document.getElementById("num").innerHTML}).done(function(data){
	 
	 
	 
	  var response2 = jQuery.parseJSON(data);
	  
	  if(response2.length>length)
	  {
	  document.getElementById("cht3").innerHTML="";
	  for(var i=0;i<response2.length;i++)
	  {
	  var b=document.getElementById("cht3").innerHTML;
	  document.getElementById("cht3").innerHTML=b+response2[i];
	  }
	  length=response2.length;
	  }
	 });
}
});




