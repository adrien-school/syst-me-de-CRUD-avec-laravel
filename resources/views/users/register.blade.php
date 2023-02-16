@extends('./../layouts\app') 

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
   <div class="card">
    <div class="card-body">
        @if(session()->has('success'))

        <div class="text-text-danger">{{ session->get('success')}}</div>@endif
         <form action="{{route('registration')}}" method='post' class="mt-5" >
                    @method('post')
                    @csrf

                    <h5>creation de compte</h5>
                    <div class="form-group mt-2">
                    <label for="">Nom </label>
                    <input type="text"  class="form-control" value="{{old('name')}}"
                    placeholder="Entrer votre nom" name="name">
                    @error('name')
                    <p class="text text-danger">{{ $message }}</p>@enderror
                    </div>
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
                            <button class="btn btn-primary btn-sm form-control mt-2" type="submit">Incription</button>
                            
</form>
<p classs="mt-1">Deja un compte ?<a href="{{route('login')}}">connecter vous</a></p>
</div>
   </div>

    </div>
    <div class="col-md-4"></div>
</div>
@stop