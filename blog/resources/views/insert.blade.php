<html>
<body>
    <form action="submit" method="post">
        <input type="text" name="nome" >
        <br><br>
        <input type="number" name="quantidade">
        <input type="number" name="id_user">
        <button type="submit">ENVIAR</button>
        @csrf
    </form>
</body>
</html>