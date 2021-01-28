@extends ('layouts.app')

@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-8 p-3 card shadow-sm">--}}
    {{--                <form method="post" action="{{route('profile.update',['profile' => auth()->user()->id])}}">--}}
    {{--                    @csrf--}}
    {{--                    @method('PUT')--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="inputName">Name</label>--}}
    {{--                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  id="inputName" value="{{auth()->user()->name}}" aria-describedby="nameHelp">--}}
    {{--                        <small id="emailHelp" class="form-text text-muted">Enter your name please</small>--}}
    {{--                        @error('name')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="inputSurname">Surname address</label>--}}
    {{--                        <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="inputSurname" value="{{auth()->user()->surname}}" aria-describedby="surnameHelp">--}}
    {{--                        <small id="emailHelp" class="form-text text-muted">Enter your surname please</small>--}}
    {{--                        @error('surname')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="exampleInputEmail1">Email address</label>--}}
    {{--                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" value="{{auth()->user()->email}}" aria-describedby="emailHelp">--}}
    {{--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
    {{--                        @error('email')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}

    {{--                    <p>Change password</p>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="inputPassword">Password</label>--}}
    {{--                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword">--}}
    {{--                        @error('password')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="inputPasswordConf">Password confirmation</label>--}}
    {{--                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="inputPasswordConf">--}}
    {{--                        @error('password_confirmation')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}
    {{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">--}}
    {{--                        Delete account--}}
    {{--                    </button>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-4 p-3">--}}
    {{--                    <div class="bg-white shadow rounded overflow-hidden">--}}
    {{--                        <div class="px-4 pt-0 pb-4 bg-dark">--}}
    {{--                            <div class="media align-items-end profile-header">--}}
    {{--                                <div class="profile mr-3 mt-4">--}}
    {{--                                    <img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" alt="..." width="130" class="rounded mb-2 img-thumbnail">--}}
    {{--                                    <p class="text-white-50">{{auth()->user()->name .''. auth()->user()->surname}}</p>--}}
    {{--                                </div>--}}
    {{--                                <div class="media-body mb-5 text-white">--}}
    {{--                                    <h4 class="mt-0 mb-0">{{auth()->user()->nick}}</h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="bg-light p-4 d-flex justify-content-end text-center">--}}
    {{--                            <ul class="list-inline mb-0">--}}
    {{--                                <li class="list-inline-item">--}}
    {{--                                    <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>--}}
    {{--                                </li>--}}
    {{--                                <li class="list-inline-item">--}}
    {{--                                    <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}

    {{--                        <div class="py-4 px-4">--}}
    {{--                            <div class="py-4">--}}
    {{--                                <div class="d-flex align-items-center justify-content-between mb-3">--}}
    {{--                                    <h5 class="mb-0">Recent posts</h5><a href="#" class="btn btn-link text-muted">Show all</a>--}}
    {{--                                </div>--}}
    {{--                                <div class="p-4 bg-light rounded shadow-sm">--}}
    {{--                                    <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>--}}
    {{--                                    <ul class="list-inline small text-muted mt-3 mb-0">--}}
    {{--                                        <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>--}}
    {{--                                        <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--    </div>--}}
    {{--        <form hidden method="post" id="delete-form" action="{{route('profile.destroy',auth()->user()->id)}}">--}}
    {{--            @csrf--}}
    {{--            @method('DELETE')--}}
    {{--        </form>--}}

    {{--        <!-- Modal -->--}}
    {{--        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--            <div class="modal-dialog">--}}
    {{--                <div class="modal-content">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>--}}
    {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                            <span aria-hidden="true">&times;</span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    {{--                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="btn btn-outline-danger">Delete account</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
                                </div>
                                @if(auth()->user()->name !== null or auth()->user()->surname !== null)
                                    <h5 class="user-name">{{auth()->user()->name . ' ' . auth()->user()->surname}}</h5>
                                @endif
                                <h6 class="user-email">{{auth()->user()->email}}</h6>
                            </div>
                            <div class="about">
                                <h5 class="mb-2 text-primary">About</h5>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <form method="post" action="{{route('profile.update',['profile' => auth()->user()->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" id="inputName" value="{{auth()->user()->name}}"
                                               aria-describedby="nameHelp">
                                        <small id="emailHelp" class="form-text text-muted">Enter your name
                                            please</small>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="inputSurname">Surname</label>
                                        <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                               name="surname" id="inputSurname" value="{{auth()->user()->surname}}"
                                               aria-describedby="surnameHelp">
                                        <small id="emailHelp" class="form-text text-muted">Enter your surname
                                            please</small>
                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" id="exampleInputEmail1" value="{{auth()->user()->email}}"
                                               aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <p class="text-danger">You can change your password if You want</p>
                            <div class="row gutters">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               id="inputPassword">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="inputPasswordConf">Password confirmation</label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control @error('password_confirmation') is-invalid @enderror"
                                               id="inputPasswordConf">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                data-target="#exampleModal">
                                            Delete account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form hidden method="post" id="delete-form" action="{{route('profile.destroy',auth()->user()->id)}}">
        @csrf
        @method('DELETE')
    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                       class="btn btn-outline-danger">Delete account</a>
                </div>
            </div>
        </div>
    </div>
@endsection
