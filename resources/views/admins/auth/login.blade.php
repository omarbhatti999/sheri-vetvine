@extends('admins.auth.authmaster')
@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
                <label class="pull-right">
                    <a href="#">Forgotten Password?</a>
                </label>

            </div>
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>


        </form>
    </div>
@endsection
