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
            background-color: #EDEDED;
        }
        .mt-6{
            margin-top:7rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center mt-6">
            <div class="col col-lg-5">
                <form>
                    <input class="form-control border-secondary rounded-pill pr-5" type="search" placeholder="Busque por professores ou áreas de interesse" id="example-search-input2">
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center mt-4">
            <div class="col col-lg-5 d-flex justify-content-between">
                <h4>{{ count($professores) }} professores</h4>
                <a href="{{route('cadastrar')}}" type="button" class="btn btn-outline-primary">Cadastrar</a>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3">
            <div class="col col-lg-5 d-flex justify-content-between">
                <a href="/"><h6>Nome<i class="bi bi-arrow-up"></i></h6></a>
            </div>
        </div>

        @foreach ($professores as $professor)
            <div class="row justify-content-md-center mt-3">
                <div class="col col-lg-5 d-flex justify-content-between bg-white rounded p-3">
                    <div>
                        <h5>{{ $professor->name }}</h5>
                        <span class="text-muted">{{ $professor->email }}</span><br>
                        <span class="text-muted">{{ $professor->phone }}</span>
                    </div>
                    <div class="col col-lg-4 bg-primary rounded text-wrap text-white p-1">
                        {{ $professor->especialidade }}
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="{{route('editar', ['id' => $professor->id])}}" class="p-2"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{route('deletar')}}" class="p-2"><i class="bi bi-trash3-fill"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>