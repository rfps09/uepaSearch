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
        <div class="row justify-content-md-center mt-5 px-5 pt-5">
            <div class="col col-lg-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none"><i class="bi bi-arrow-left"></i> <strong>Voltar</strong></a>
            </div>
        </div>
        <div class="row justify-content-md-center pb-1 px-5">
            <div class="col col-lg-5">
                <h3>Editar {{ $professor->name }}</h3>
            </div>
        </div>
        <div class="row justify-content-md-center pb-5 px-5">
            <div class="col col-lg-5">
                <form action="{{ route('create') }}" method="POST">
                    @csrf
                    <label for="matricula" class="form-label">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" value="{{ $professor->id }}" required>

                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" value="{{ $professor->name }}" required>

                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" value="{{ $professor->email }}" required>

                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="Telefone" value="{{ $professor->phone }}" required>
                    
                    <label for="especialidade" class="form-label">Especialidade</label>
                    <input type="text" class="form-control" id="especialidade" placeholder="Especialidade ou área de interesse" value="{{ $professor->especialidade }}" required>

                    <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">Salvar alterações</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>