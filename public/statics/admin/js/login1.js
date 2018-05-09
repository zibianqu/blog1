$(function(){
	
	var config={
			login_url:'http://localhost.com/laravel_18/blog/public/console/postlogin'
	}
	var ado={
			submitForm:function(element){
				var a=this;
				element.click(function(){
					var user=$('#user').val(),pass=$('#pass').val(),_token=$("input[name='_token']").val(),l=$('.login_center label');
					if(a.isNull(user)){
						l.show();
						l.html("请输入用户名");
						return;
					}
					if(pass=="" || pass==null){
						l.show();
						l.html("请输入密码");
						return ;
					}
					$.post(config.login_url,{user:user,pass:pass,_token:_token},function(json){
						if(json.code==1){
							location.href=json.data.url;
						}else{
							l.show();
							l.html(json.msg);
						}
					},'json')
				});
			},
			isNull:function( str ){
				if ( str == "" ) return true;
				var regu = "^[ ]+$";
				var re = new RegExp(regu);
				return re.test(str);
			},
			inputOnfocus:function(element){
				var l=$('.login_center label');
				element.focus(function(){
					l.hide();
				})
				
				
			}
	}
	ado.submitForm($('.login_center button'));
	ado.inputOnfocus($('#user'));
	ado.inputOnfocus($('#pass'));
})