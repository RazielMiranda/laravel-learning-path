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
@include('welcome');
@if($data['name'] == 'raziel cansado')
<h1>ainda to cansado</h1>
@else
<h2>mudou de pessoa</h2>
@endif

@foreach ($data as $key => $item)
<h3>{{$item}}</h3>
<h2>{{$key}} : {{$item}}</h2>
@endforeach

@for($i=0; $i<10; $i++)

<h1>o valor é : {{$i}}</h1>
@endfor


<form>
	@csrf
	<h1>teste csfr</h1>
	@method('PUT');
</form>

{{$data['name']}}
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