<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>gyagariko逆転</title>
</head>
<body>
    <header  class = "navbar navbar-dark bg-danger">
        <div class = "container">
            <a class = "navbar-brand" href = "{{ url('') }}">
                Gyagariko
            </a>
        </div>
    </header>
    
    @yield('content')
   
</body>
</html>