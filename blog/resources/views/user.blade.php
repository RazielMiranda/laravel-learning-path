<h1>User account:</h1>
<!-- 

Listando os erros em lista

@if($errors->any())
<div>
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
</div> 
@endif

-->
<form action="userscontroller" method="post">
	<h2>post</h2>
	<input type="text" name="email">
	@error('email')
		<span>{{$message}}</span>
	@enderror
	<br>
	<br>
	{{@csrf_field()}}
	<input type="text" name="password" type="password">
	@error('password')
		<span>{{$message}}</span>
	@enderror
	<br>
	<br>
	<button type="submit">submit</button>
</form>

<!-- <form action="userscontroller" method="get">
	<h1>get</h1>
	<input type="text" name="email">
	<br>
	<br>
	{{@csrf_field()}}
	<input type="text" name="password" type="password">
	<br>
	<br>
	<button type="submit">submit</button>
</form> -->