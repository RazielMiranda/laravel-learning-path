<form action="login" method="post">
	<input type="text" name="user">
	<input type="text" name="password">
	@csrf

	<button type="submit">enviar</button>
</form>