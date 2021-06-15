<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Editar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    @include('layouts.menu')
    <main class="container mt-5">
        <h1>Editar categoria</h1>
        <form method="POST" action="{{ route('category.update', $category->id) }}">
            @method('PATCH')
            @csrf
            <div class="row">
                <span class="form-label">Nome</span>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>
            <div class="row mt-4">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>
        </form>
    </main>
</body>
</html>