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
                        <p class="head-text">Forgot Password</p>
                        <form class="form-design">
                            <div class="form-inputs">
                                <label>Username</label>
                                <input type="text" class="" placeholder="Username">
                            </div>
                            <div class="form-inputs">
                                <label>Email</label>
                                <input type="text" class="" placeholder="sample@email.com">
                            </div>

                            <button type="submit" class="btn-submit">Send Verification</button>
                        </form>
                        <p class="simple-text">Return to <a href="{{ route('login-page') }}">Login page.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
