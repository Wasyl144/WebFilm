@extends('layouts.app')

@section('content')
    <section
        class="position-relative jarallax pt-5 pb-5 mt-0 align-items-end align-items-md-center w-100 d-flex bg-dark">
        <div class="jarallax-img"
             style=" background-image: url(https://images.unsplash.com/photo-1497091071254-cc9b2ba7c48a?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1506&amp;q=80);"></div>
        <div class="container-fluid d-flex h-100">
            <div class="row  justify-content-center w-100  align-items-start d-flex text-center h-100">
                <div class="col-12 col-md-10  h-50 ">
                    <h1 class=" display-4  text-light mb-2 mt-5"><strong>Hello, check my website about films</strong>
                    </h1>
                    <p class="lead  text-light mb-5">@auth Hello
                        <strong>{{auth()->user()->nick}} </strong> @endauth @guest Hello, register to get the full
                        functionality of service. @endguest</p>
                    @guest
                        <div class="btn-container-wrapper p-relative d-block zindex-1">
                            <a href="{{route('register')}}" class="btn btn-outline-info">Hello</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 text-white-50">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
                <div class="col-6 col-md-3">
                    <img alt="image" class="img-fluid rounded mt-1 mb-2"
                         src="https://images.unsplash.com/photo-1533720141687-c2f685704710?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=b66c52d6f252a5b02153a9e22d887a9e">
                    <h2> Blueprints</h2>
                    <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                        mollis, est non commodo luctus. </p>
                </div>
            </div>
        </div>
    </section>
@endsection
