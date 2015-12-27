/*foot-hide*/
$(document).ready(function(){

	$("#footbar-cc a").click(function(){

		$("#footbar-aa").hide();

	})

})

/*index turn to login.window-style*/
window.onload=function (){
	if(!document.getElementsByTagName)return false;
	var links=document.getElementsByTagName("a");
	for(var i=0;i<links.length;i++){
		if(links[i].getAttribute("class")=="popup"){
			links[i].onclick=function(){
				popUp(this.getAttribute("href"));
				return false;
			}
		}
	}
}

function popUp(winURL){
	window.open(winURL,'popup','width=320,height=580');
}

/*媒体查询 768px 调整文字*/
$(function(){
	var mx=window.matchMedia("(min-width: 768px)");
	if(mx.matches){
		
	}else{                    //低于
		$('.center-title h1').css('font-size','5em');
	}
})

/*jelly动画*/
$(document).ready(function (){
	var count=0;
	$('#jelly-right-eyebrows,#jelly-left-eyebrows').jrumble();
	$('#jelly-right-eyebrows,#jelly-left-eyebrows').trigger('startRumble');


	$("#jelly").mouseover(function(){

		var demoTimeout;
		$this = $("#jelly-right-eyebrows,#jelly-left-eyebrows");
		clearTimeout(demoTimeout);
		$this.trigger('startRumble');
		demoTimeout = setTimeout(function(){$this.trigger('stopRumble');}, 250)

		
	})
})

