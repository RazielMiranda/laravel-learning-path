<form action="task" method="post">
	<input type="text" name="task">
	<button type="submit">enviar</button>
		{{@csrf_field()}}
</form>

<h1>{{session('status')}}</h1>