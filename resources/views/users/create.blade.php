@extends('layouts.app')
@section('content')
    @include('includes.header')    
    <div class="container register" style="margin-top:10%">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <button class="btn btn-primary" style="width:50%"><a href="{{ route('login') }}" style="text-decoration:none; color:#fff;">Login</a></button>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Signup as a User</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="first_name" type="text" class="form-control" placeholder="First Name" value="{{old('first_name')}}" />
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <input name="user_name" type="text" class="form-control" placeholder="User Name" value="{{old('user_name')}}" />
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control"  placeholder="Password" value="{{old('password')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" />
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}" />
                                    </div>
                                    <div class="form-group">
                                        <input name="password_confirmation" type="password" class="form-control"  placeholder="Confirm Password *" value="{{old('confirm_password')}}" />
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </form>
                        @if ($errors->any())
                        <div class="note note-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        @include('includes.footer')
    </div>
@endsection