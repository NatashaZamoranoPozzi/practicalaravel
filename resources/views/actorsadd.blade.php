<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Actores</title>
</head>
<body>
    <form action="/actors/add" method='post'>
        @csrf
        <div class="form-group">
          <label for="inputName">Nombre: </label>
          <input type="text" class="form-control" id="inputName" aria-describedby="name" name= 'first_name'>
        </div>
        <div class="form-group">
            <label for="inputLastName">Apellido: </label>
            <input type="text" class="form-control" id="inputLastName" aria-describedby="lastName" name= 'last_name'>
        </div>
        <div class="form-group">
            <label for="inputRating">Rating</label>
            <input type="text" class="form-control" id="inputRating" aria-describedby="rating" name= 'rating'>
        </div>
        <div class="form-group">
            <label for="peliculaFav">Pelicula Favorita</label>
            <select class="form-control" id="peliculaFav" name= 'favourite_movie_id'>
              <option>1</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>