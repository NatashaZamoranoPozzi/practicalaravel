<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1>formulario de envio</h1>
        <div class="alert bh-light py-3">
            <form action="/proceso" method="post">
                @csrf
                Nombre:
            <br>
            <input type="text" name="nombre" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
        </div>
    </main>
</body>
</html>