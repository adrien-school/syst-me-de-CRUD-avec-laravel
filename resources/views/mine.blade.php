@extends('./layouts.app') 

@section('content')
<div class="row">
<div class="col-md-6">
    <ul class="list-group mt-5">
        <h4>Articles disponible</h4>
        @forelse($Myarticles as $article)
  <li class="list-group-item ecole">
   <a href="article/{{$article->id}}/details"><div class="name">{{ $article->name }}</div></a> 
   <a href=""> <div class="description">{{$article->description }}</div></a>
    @empty
    <p class="text">Aucun articles disponible</p>
  </li>
  @endforelse
</ul>
</div>

@stop