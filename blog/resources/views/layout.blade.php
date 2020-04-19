<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') - page</title>
</head>
<style type="text/css">
	.header{
		color: green;
	}

	.content{
		color: blue;
	}
</style>
<body>
	<div class="header">
		
		@section('header')
		<h1>header is common</h1>
		@show

	</div>

	<div class="content">
		@section('content')

		@show
	</div>

</body>
</html>