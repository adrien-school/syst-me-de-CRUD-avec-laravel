@extends('./layouts.app') 

@section('content')

<div class="row">
<div class="col-md-6">
    <ul class="list-group mt-5">
        <h4>Articles disponible</h4>
        @forelse($articles as $article)
  <li class="list-group-item ecole">
   <a href="article/{{$article->id}}/details"><div class="name">{{ $article->name }}</div></a> 
   <a href=""> <div class="description">{{$article->description }}</div></a>
    @empty
    <p class="text">Aucun articles disponible</p>
  </li>
  @endforelse
</ul>
</div>
 <div class="col-md-6">

<div class="card mt-5">

    <div class="card-body"> 
@if(session()->has('success'))
<div class="alert alert-success"> {{ session()->get('success')}}</div>
@endif
        <h4 class="card-title article"> ajouter un article </h4>
    <form action="{{ route('articles.register')}}" method="post">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="">nom</label>
        
    <input type="text" class="form-control mb-3" placeholder="entrer votre nom"  name="name"
    value= {{ old('name') }} >
    @error('name')
        <p class="text text-danger">{{ $message}}</p>@enderror
    <label for="">desrciption </label>
    <textarea class="form-control mb-3" name="description"
     placeholder="entrer la description de l'article" type="text"></textarea>
 @error('description')
 <p class="text text-danger">{{ $message}}</p>@enderror
    </div>
    <button type="submit" class="btn btn-primary " >envoyer</button>
</form>
    </div>
</div>
</div>

</div>
@stop 