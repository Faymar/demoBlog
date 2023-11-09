@extends('layout.nav')
@section('contenue')
<div class="container my-4 ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <ul class="list-group">
                @foreach($listecategories as $categorie )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$categorie->nomCategorie}}
                    <span class="badge bg-primary rounded-pill">{{$categorie->id}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection()