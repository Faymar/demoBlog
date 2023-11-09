@extends('layout.nav')
@section('contenue')

@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach($errors->all() as $error)
    <strong>Oh snap!</strong> {{$error}}
    @endforeach
</div>
@endif

<div class="container my-4 ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <form action="/categorie/ajouterCategorie" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Nom de la Categorie</label>
                    <input type="text" name="nomCategorie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom de la Categorie">
                    <small id="emailHelp" class="form-text text-muted">Mettre de Nom de la Categorie</small>
                </div><br>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection()