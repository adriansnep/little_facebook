$(document).ready(function(){
$("#abouth").click(function(e){
     	ajaxCall(
			'abouth.php',
			'body',
			function() {}
		);

});
});