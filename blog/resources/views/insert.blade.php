<html>
<body>
    {{-- <form action="submit" method="post">
        <h3>insert</h3>
        <input type="text" name="nome" placeholder="nome">
        <br><br>
        <input type="number" name="quantidade" placeholder="quantidade">
        <input type="number" name="id_user" placeholder="id user">
        <button type="submit">ENVIAR</button>
        @csrf
    </form> --}}

    <form action="submit" method="post">
        <h3>update</h3>
        <input type="text" placeholder="nome" name="nomeuser">
        <input type="number" placeholder="id user" name="iduser">
        <button input="submit">enviar</button>
        @csrf
    </form>


</body>
</html>