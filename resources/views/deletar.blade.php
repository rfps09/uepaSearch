<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #BB7575;
        }
        .mt-6{
            margin-top:7rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-md-center align-items-center vh-100">
            <div class="col col-lg-4 p-4 bg-light rounded">
                <h4 class="text-danger">Tem certeza que deseja remover o professor ”Anderson”?</h4>
                <p>Esta ação não poderá ser desfeita!</p>
                <div class="d-flex justify-content-end">
                    <div class="px-2">
                        <a href="{{ url()->previous() }}" type="button" class="btn btn-light">Cancelar</a>
                    </div>
                    <div>
                        <a href="{{route('deletar')}}" type="button" class="btn btn-danger">Deletar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>