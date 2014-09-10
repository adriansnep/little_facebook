//Alecsandru Patrascu, 2013

/**
 * Makes an AJAX call and puts the result in any container
 * 
 * @param link the link to the webpage
 * @param target -optional- the container where to put the result
 * @param completionFunction -optional- a function that does postprocessing after the DOM is created
 * @param asynchronousCall -optional- if true, the ajax call is blocking
 */
function ajaxCall(link, target, completionFunction, asynchronousCall) {
	var isAsync = true;
	
	if (asynchronousCall) {
		isAsync = async;
	}
	
	
	if (target) {
		$(target).html("<img src='images/ajax-loader.gif'/>");
	}
	
	$.ajax({
		type : 'POST',
		url : link,
		cache : false,
		async: isAsync,
		success : function(response) {
			$('body').css('cursor','default');	
			if (target)
				$(target).html(response);
			if (completionFunction)
				completionFunction();
		},
		complete : function() {
			return true;
		}
	});
}