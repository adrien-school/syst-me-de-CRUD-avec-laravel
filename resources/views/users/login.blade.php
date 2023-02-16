@extends('./../layouts\app') 

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class="card">
    <div class="card-body"> 

       <i class="fa-solid fa-user">
       connexion au compte
</i>

@if(session()->has('success'))
    <div class="alert alert-danger">{{session()->get('success')}}</div>@endif
<form action="{{route('login')}}" method='post' class="mt-5">
    @method('post')
    @csrf
<div class="form-group mt-2">
                        <label for=""> Email</label>
                    <input type="text" name="email" class="form-control" name="email" 
                    placeholder="Entrer votre email" value="{{old('email')}}">
                   @error('email')
                    <p class="text text-danger">{{ $message }}</p>@enderror
</div>
<div class="form-group mt-2"> 
                    <label for="">password</label>
                 <input type="password" name="password" placeholder="Entrer votre mots de passe" class="form-control">
                 @error('password')
                    <p class="text text-danger">{{ $message }}</p>@enderror</div>
                      <button type="submit" class="form-control btn btn-info mt-1">se connecter</button>
                      
</form>
<p class="mt-1"> Aucun compte <a href="{{route('registration')}}">creer un compte</a></p>
    </div>
</div>
    </div>
    <div class="col-md-4"></div>
</div>


@stop