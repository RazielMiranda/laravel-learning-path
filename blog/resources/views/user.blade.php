<h1>User account:</h1>

<!-- 
 Via post

<form action="userscontroller" method="post">
 -->
<form action="userscontroller" method="get">
	<input type="text" name="email">
	<br>
	<br>
	{{@csrf_field()}}
	<input type="text" name="password" type="password">
	<br>
	<br>
	<button type="submit">submit</button>
</form>