@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-3">
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 bg-dark">
                        <div class="media align-items-end profile-header">
                            <div class="profile mr-3 mt-4">
                                <img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
                                     alt="..." width="130" class="rounded mb-2 img-thumbnail">
                                <p class="text-white-50">{{$user->name .''. $user->surname}}</p>
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">{{$user->nick}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i
                                        class="fa fa-picture-o mr-1"></i>Photos</small>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i
                                        class="fa fa-user-circle-o mr-1"></i>Followers</small>
                            </li>
                        </ul>
                    </div>

                    <div class="py-4 px-4">
                        <div class="py-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="mb-0">Recent posts</h5><a href="#" class="btn btn-link text-muted">Show
                                    all</a>
                            </div>
                            <div class="p-4 bg-light rounded shadow-sm">
                                <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam.</p>
                                <ul class="list-inline small text-muted mt-3 mb-0">
                                    <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>
                                    <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
