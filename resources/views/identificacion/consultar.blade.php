<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consultar</title>
    <link rel="stylesheet" href="/css/validarform.css">
    {{-- <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="/js/validarform.js"></script>
</head>
<body>

        <form class="form" action="{{route('consultar')}}" id="f1" method="GET">
                <div class="field-consult" id="">
                        <input type="text" name="documento"  class="form-control" placeholder="Valida tu documento de identidad" id="documento" required> 
                        <div class="button">
                            <button class="fa fa-arrow-right" type="submit"></button>
                        </div>
                </div>
            </form>
    
</body>
</html>