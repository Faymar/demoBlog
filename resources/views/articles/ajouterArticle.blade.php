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
        <div class="col-md-6">
            <form action="/articles/ajouterArticle" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Titre</label>
                    <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de l'article">
                    <small id="emailHelp" class="form-text text-muted">Mettre le titre de l'article</small>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
                    <textarea class="form-control" name="contenu" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Example select</label>
                    <select class="form-select" name="categorie_id" id="exampleSelect1">
                        @foreach($categories as $categorie )
                        <option value="{{$categorie->id}}" >{{$categorie->nomCategorie}}</option>
                        @endforeach
                    </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection()