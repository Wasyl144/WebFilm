@extends('layouts.app')

@section('content')


    <div class="container bg-dark p-3 shadow-sm">
        <form method="post" action="{{route('films.update',$film->id)}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="title" class="text-white-50 col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                           value="{{ $film->title }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-white-50 text-md-right">{{ __('Category') }}</label>

                <div class="col-md-6">
                    <input id="category" type="text" class="form-control @error('category') is-invalid @enderror"
                           name="category" value="{{ $film->category }}" required autocomplete="category" autofocus>

                    @error('category')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label text-white-50 text-md-right">{{ __('Enter description') }}</label>
                <div class="col-md-6">

                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3">{{$film->body}}</textarea>
                </div>
                @error('body')
                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label class=" text-center text-white-50" for="exampleFormControlFile1">Put your image</label>
                <input type="file" value="{{old('image')}}" name="image" class=" text-center form-control-file text-white-50" id="exampleFormControlFile1">

                @error('image')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            @if($film->hasMedia('film_'.$film->id))
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="container" id="img_container">
                        <h3 class="text-white-50">Your image </h3>
                        <button type="button" onclick="delete_img()" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <img id="img_preview"
                             style="height: 300px;"
                             src="{{'/storage/'.$film->firstMedia('film_'.$film->id)->getDiskPath()}}"
                        alt="Card image cap">
                    </div>
                </div>

            </div>
            @endif
            <div class="form-group text-right">
                <button type="submit"  class="btn btn-outline-success">Submit</button>
            </div>
            <input type="text" hidden id="del_img" name="del_img">
        </form>
    </div>

    <script>
        @if($film->hasMedia('film_'.$film->id))
        function delete_img() {
            let container = document.getElementById('img_container');
            let inputDel = document.getElementById('del_img');

            container.remove();
            if (inputDel.value == "") {
                console.log('siea')
                inputDel.setAttribute('value',"{{$film->firstMedia('film_'.$film->id)->id}}");
            }


        }
        @endif
    </script>



@endsection
