/**
 * createCookie, readCookie and eraseCookie functions
 * taken from http://www.quirksmode.org/js/cookies.html
 */

/**
 * create cookie
 * @param {String} name
 * @param {String} value
 * @param {Integer} days [optional]
 * @return void
 */
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

/**
 * read cookie
 * @param {String} name
 * @return {String}|null
 */
function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

/**
 * erase cookie
 * @return void
 */
function eraseCookie(name) {
	createCookie(name,"",-1);
}

/**
 * remember registered email address
 * @param {String} name - email address field name
 * @return void
 */
function joinWithSpindo(name){
	// get all elements with specified name
	var elements = document.getElementsByName(name);
	if(!elements || elements.length < 1){ return false; }

	// get first element
	var element = elements[0];

	// save value to cookie
	createCookie('__spindo_email', element.value);
}
