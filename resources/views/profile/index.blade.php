@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img id="avatar" onclick="openUploadWindow()"
                                         src="@if(!auth()->user()->hasMedia('avatar'))https://bootdey.com/img/Content/avatar/avatar1.png @else{{'storage/'.auth()->user()->firstMedia('avatar')->getDiskPath()}} @endif" alt="Maxwell Admin">
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

    <input type="file" name="avatar" id="input_img" onchange="addPhoto()" hidden>


    <script>

        function openUploadWindow() {
            const fileField = document.getElementById('input_img')
            fileField.click();
        }

        async function addPhoto() {
            const formData = new FormData()
            const fileField = document.getElementById('input_img')
            formData.append('avatar', fileField.files[0])
            await fetch("{{route('avatar.upload')}}", {
                headers: {
                    "X-CSRF-Token": '{{csrf_token()}}'
                },
                credentials: "same-origin",
                method: 'post',
                body: formData
            }).then(res => res.json()).then(data => {

                if (data.status === "ok") {
                    window.location.reload(true);
                }
            }).catch(err => console.error(err))
        }
    </script>

@endsection
