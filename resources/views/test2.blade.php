<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Color: {{$color}}</h2> 

<h3>Numeros</h3>
<div>
    @for ($i=1; $i<=$n; $i++)
            {{$i}} <br>
        @endfor

<h3>Frutas</h3>
    @foreach ($frutas as $fruta)

    {{$fruta}} <br>
        
    @endforeach
</div>
</body>
</html>