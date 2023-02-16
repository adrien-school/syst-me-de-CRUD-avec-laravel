@extends('./layouts.app') 

@section('content')
<div class="row mt-3">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>editer un article</h4>
                <form action="/article/{{ $article->id}}/update" method='post' >
                    @method('put')
                    @csrf
                    <input type="text"  class="form-control" value="{{$article->name}}" name="name">
                    @error('name')
                    <p class="text text-danger">{{ $message }}</p>@enderror
                    <textarea name="description" class="form-control mt-2" >{{$article->description}}</textarea>
                    @error('description')
                    <p class="text text-danger">{{ $message }}</p>@enderror
                            <button class="btn btn-primary mt-2" type="submit">actualiser</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
@stop