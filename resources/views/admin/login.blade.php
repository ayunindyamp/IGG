@extends('admin.layouts.header')

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="my-5 border-0 shadow-lg card o-hidden">
                    <div class="p-3 p-md-5 card-body">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block p-3 p-md-5 text-center border-primary border-right">
                                <img class="img-fluid" src={{asset("assets/images/demo/logo.gif")}}></div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <h1 class="mb-4 text-gray-900 h4">Admin Page !!</h1>
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                                    </div>
                                    @endif
                                </div>
                                <form class="user" method="post" action="{{ route('login.post') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Input Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login →
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="https://axcora.com/getaxcoracms" class="text-danger">Only Admin PT.IGG</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
