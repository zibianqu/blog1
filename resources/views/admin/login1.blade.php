<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理中心</title>
<link rel="stylesheet" href="{{ $sites['static']}}admin/css/login.css"></head>
<script src="{{$sites['static']}}../js/jquery.min.js"></script>
<script src="{{$sites['static']}}admin/js/login.js"></script>
</head>
<body>
	<div class="login_center">
		<p class="login_title">后台管理中心</p>
		{{ csrf_field() }}
		<p><span>用户名：</span><input type="text" name="user" id="user" /></p>
		<p><span>密码：</span><input type="password" name="pass" id="pass" /></p>
		<p><label>用户或密码不正确</<label></p>
		<p><button>登陆</button></p>
	</div>
</body>
</html>