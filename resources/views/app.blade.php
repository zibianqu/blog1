<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>应用程序 - @yield('title')</title>
</head>
<body>
    @section('sidebar')
    	这是主布局的侧边栏
    @show
	<div class="container">
		@yield('content')
	</div>
</body>
</html>