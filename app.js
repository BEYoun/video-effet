var getHttpRequest = function(){

	var httpRequest = false;

	if (window.XMLHttpRequest){
		httpRequest = new XMLHttpRequest();
		if (httpRequest.overrideMimeType){
			httpRequest.overrideMimeType('text/xml');
		}
	}
	else if (window.ActiveXObject){
		try{
			httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

		}catch (e) {
			try{
				httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){}
		}
	}
	if (!httpRequest) {
		alert('Abondand');
		return false;
	}


	return httpRequest;
}
var video = document.getElementById('principale')
 var principale = document.querySelectorAll('#selection')
 for (var i = principale.length - 1; i >= 0; i--) {
principale[i].addEventListener('click',function(e){
		e.preventDefault()
		var httpRequest = getHttpRequest()
		httpRequest.onreadystatechange = function (){
			if (httpRequest.readyState === 4){
				
 				console.log(src)
				debugger
			}
			
		}
		httpRequest.open('GET','valeur.php?nom=younes',true)
		httpRequest.send()
	})
 }
	

