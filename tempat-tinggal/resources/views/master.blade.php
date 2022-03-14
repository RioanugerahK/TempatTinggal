<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('master.title')</title>
</head>
<body>
    <div class="nav">
           @include('particel.navbar')
    </div>
    <div class="container">
        
    </div>
    

   
</body>
</html>

<style>
    body{
        margin: 0;
        padding: 0;
    }
    .nav{
        height: 130.5px;
        border-bottom: 2px solid #789395;
        margin-top: -5px;
    }
    .container{
        height: 300px;
        background-color: black;
    }
</style>