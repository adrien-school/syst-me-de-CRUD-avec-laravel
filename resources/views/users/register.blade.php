@extends('./../layouts\app') 

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="" method='post' >
                    @method('post')
                    @csrf
                    <input type="text"  class="form-control" value="" name="name">
                    @error('name')
                    <p class="text text-danger">{{ $message }}</p>@enderror
                    <textarea name="description" class="form-control mt-2" ></textarea>
                    @error('description')
                    <p class="text text-danger">{{ $message }}</p>@enderror
                            <button class="btn btn-primary mt-2" type="submit">actualiser</button>
                </form>

    </div>
    <div class="col-md-4"></div>
</div>
@stop