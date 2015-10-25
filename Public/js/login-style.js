/*login-style*/
// window.onload=loginTips;
// function loginTips(){
// 	var tips=document.getElementsByTagName("input");
// 	var tipsForm=document.getElementById("login_form");
// 	var tipsNotice=document.getElementById("login_notice");
// 	for(var i=0;i<tips.length;i++){
// 		if(tips[i].getAttribute("id")=="login_btn"){
// 			tips[i].click=function(){
// 				var login_arr=tipsForm.serialize();
// 				var $action=tipsForm.attr('action');
// 				$.post($action,login_arr,function(data){
// 					tipsNotice.html(data.info);
// 				}
// 			}
// 		}
// 	}
// }
$(function(){
	$('#login_btn').click(function(){
		var login_arr=$('#login_form').serialize();
		var $action=$('#login_form').attr('action');
		$.post($action,login_arr,function(data){
			$('#login_notice').html(data.info);
		});
	})
})

/*register-style*/
$(function(){
	$('#register_btn').click(function(){
		var login_arr=$('#register_form').serialize();
		var $action=$('#register_form').attr('action');
		$.post($action,login_arr,function(data){
			$('#register_notice').html(data);
		});
	})
})


/*edit-style*/
$(function(){
	$('#edit-btn').click(function(){
		
		var edit_arr=$('#edit-tab').serialize();
		var $action=$('#edit-tab').attr('action');
		$.post($action,edit_arr,function(data){
			$('#edit-notice').html(data);

		});
	})
})

$(function(){
	$('#edit-btn2').click(function(){
		
		var editpw_arr=$('#edit-tab2').serialize();
		var $action=$('#edit-tab2').attr('action');
		$.post($action,editpw_arr,function(data){
			$('#edit-notice2').html(data.info);

		});
	})
})