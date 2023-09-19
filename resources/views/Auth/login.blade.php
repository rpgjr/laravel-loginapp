@extends('layout.layout')
@section('content')

    <section class="auth">
        <div class="container">
            <div class="auth">
                <div class="auth-image">
                    <img src="{{ asset('bg-one.jpg') }}" alt="">
                </div>
                <div class="auth-form">
                    <div class="auth-form-body">
                        <p class="head-text">Login</p>
                        <form class="form-design" method="post" action="{{ route('login-account') }}">
                            @csrf
                            <div class="form-inputs">
                                <label>Email</label>
                                <input type="email" class="" placeholder="sample@email.com" name="email">
                            </div>
                            <div class="form-inputs">
                                <label>Password</label>
                                <input type="password" class="" placeholder="********" name="password">
                            </div>

                            <button type="submit" class="btn-submit">Login</button>
                        </form>
                        <p class="simple-text">No account yet? Please register <a href="{{ route('register-page') }}">here.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
