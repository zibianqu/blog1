@extends('app')
@section('title','Page Title')
@section('sidebar')
	@parent
	<p>这将追加到主布局的侧边栏@{{$name}}</p>
@endsection

@section('content')
	<p>这是主题内容。{{date('Y-m-d H:i:s')}}</p>
	<p>
		{{$name}}  
		@if(strlen($name)==4)
			$name长度为4
		@else
			$name参数不和法
		@endif		
		
	</p>
@endsection

