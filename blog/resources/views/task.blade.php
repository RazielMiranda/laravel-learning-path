<form action="task" method="post"
enctype="multipart/form-data" 
>
	<input type="text" name="task">
	<input type="file" name="img">
	<button type="submit">enviar</button>
		{{@csrf_field()}}
</form>

<h1>{{session('status')}}</h1>