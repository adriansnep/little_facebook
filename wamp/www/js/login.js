$(document).ready(function(){
	$(".ascuns").hide();
	
	
	$("#buton").click(function(e){
		$(".ascuns").show("slow");
	
	});
	
	$( "#tabs" ).tabs();
	
	$("#submit").click(function(e){
		ajaxCall(
			'include/login-ok.php',
			'#content',
			function() {
				console.log('s-a terminat de incarcat header');
			}
		);
	});

});