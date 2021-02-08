@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row bg-dark p-3 shadow-sm align-items-center">
            <div class="col-md-8">
                <h3 class="text-white-50">This is your libary to add some films to rate.</h3>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn text-right btn-outline-info" href="{{route('films.create')}}">Add a Film</a>
            </div>
        </div>
    </div>

    <div class="container p-3">
        <div class="row bg-dark  shadow-sm  align-items-center">
            @forelse($films as $film)
            <div class="col-md-4 p-2">
                <div class="card mb-4 box-shadow">
                    <img
                        class="card-img-top"
                         src="@if(!$film->hasMedia('film_'.$film->id))
                         https://png.pngtree.com/png-clipart/20190921/original/pngtree-no-photo-taking-photo-illustration-png-image_4698291.jpg"
                         @else {{'storage/'.$film->firstMedia('film_'.$film->id)->getDiskPath()}}" @endif
                         alt="Card image cap">
                    <div class="card-header">
                        <h3>{{$film->title}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$film->body}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('films.edit', $film->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                <button onclick="getElementById('delete').click()" class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <form hidden action="{{route('films.destroy', $film->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button id="delete" hidden type="submit"></button>
                </form>
            @empty
            <h3 class="text-white-50">NO FILMS IN YOUR LIB</h3>

            @endforelse

        </div>
        @if($films->links())
            <div class="row">

                {{$films->links()}}
            </div>
        @endif
    </div>

@endsection
