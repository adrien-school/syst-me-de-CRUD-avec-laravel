@extends('./layouts.app') 

@section('content')
<div class="card mt-3">
    <a href="{{ route('home') }}">retour</a>
    <div class="card-body">

        <h4>Articles disponible</h4>
   <p ><div class=" ecole">{{ $articles->name }}</div></p> 
   <p > <div class="description">{{$articles->description }}</div></p>
   </div>
   <div class="card-footer">
<a href="{{route('show.edit',$articles->id)}}" class="btn btn-info mt-2 mb-1 ml-1"> edit</a>
<form action="/article/{{$articles->id}}/delete" method="post">
    @csrf
    @method('delete')
<button class="btn btn-danger mt-2 mb-1" type="submit">suprimer</button></form>
</div>
</div>




@stop