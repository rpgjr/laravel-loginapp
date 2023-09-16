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
                        <p class="head-text">Register</p>
                        <form class="form-design" method="post" action="{{ route('register-account') }}">
                            @csrf
                            <div class="form-inputs">
                                <label>Full Name</label>
                                <input type="text" class="" placeholder="Full Name" name="full_name" required>
                                @error('full_name')
                                    <div class="error">{{ $message }}!</div>
                                @enderror
                            </div>
                            <div class="form-inputs">
                                <label>Username</label>
                                <input type="text" class="" placeholder="Username" name="username" required>
                                @error('username')
                                    <div class="error">{{ $message }}!</div>
                                @enderror
                            </div>
                            <div class="form-inputs">
                                <label>Email</label>
                                <input type="email" class="" placeholder="sample@email.com" name="email" required>
                                @error('email')
                                    <div class="error">{{ $message }}!</div>
                                @enderror
                            </div>
                            <div class="form-inputs">
                                <label>Password</label>
                                <input type="password" class="" placeholder="********" name="password" required>
                                @error('password')
                                    <div class="error">{{ $message }}!</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn-submit">Register</button>
                        </form>
                        <p class="simple-text">Already registered? Login <a href="{{ route('login-page') }}">here.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
