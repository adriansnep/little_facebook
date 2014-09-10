$(document).ready(function(){
	/*
	//1
	$.ajax({
		type : 'POST',
		url : 'include/header.php',
		cache : false,
		async: 'false',
		success : function(response) {			
			$('header').html(response);
		}
	});
	
	
	$.ajax({
		type : 'POST',
		url : 'include/footer.php',
		cache : false,
		async: 'false',
		success : function(response) {			
			$('footer').html(response);			
		}
	});
	
	
	$.ajax({
		type : 'POST',
		url : 'include/content.php',
		cache : false,
		async: 'false',
		success : function(response) {			
			$('#content').html(response);			
		}
	});
	*/
	
	/*
	//2
	ajaxCall(
		'include/header.php',
		'header',
		function() {
			console.log('s-a terminat de incarcat header');
		}
	);
	ajaxCall(
		'include/footer.php',
		'footer',
		function() {
			console.log('s-a terminat de incarcat footer');
		}
	);
	ajaxCall(
		'include/content.php',
		'#content',
		function() {
			//$("#buton").click(function(e){
			//	$(".ascuns").show("slow");
			//});
		}
	);
	*/
	
	//3
	var pages = [];
	pages.push({
		link: 'include/header.php',
		destination: 'header',
		callback: function() {
			//..
		}	
	});
	pages.push({
		link: 'include/footer.php',
		destination: 'footer',
		callback: function() {
			//..
		}	
	});
	pages.push({
		link: 'include/content.php',
		destination: '#content',
		callback: function() {
			//..
		}	
	});
	
	pages.forEach(function(page){
		ajaxCall(page.link, page.destination, page.callback);
	});
});