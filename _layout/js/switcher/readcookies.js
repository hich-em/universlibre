var cookie = function(name,value,expires){
	var self = this, expires = expires || 365; // 365 days should be enough by default
	if( typeof name != 'undefined' ){
		if( typeof value != 'undefined' ){ // set the value of the cookie
			var date = new Date();
			date.setTime( date.getTime() + ( expires*24*60*60*1000 ) );
			expires = "; expires="+date.toGMTString();
			document.cookie=name+'='+value+expires+";";
			return value;
		} else {
			// cookies are separated with ; and a whitespace "; ", so it should work
			// needs further testing...so for now just stick with this ";"
			var cookies = document.cookie.split('; ');
			for( var i = 0; i < cookies.length; i++ ){
				var cookie = cookies[i].split('=');
				if( cookie[0] == name ){
					return cookie[1] != 'undefined' ? cookie[1] : false;
				}
			}
		}
	}
}
var ck_skin   = cookie( 'template-skin' )
if( ck_skin ){
	switch( ck_skin ){
		case "blue":
			ck_skin = "blue";
			break;
		default:
			ck_skin = "default";
	}
	skin      = document.getElementById('template-skin');
	skin.href = "_layout/css/skins/" + ck_skin + ".css";
	cookie( 'template-skin', ck_skin );
}