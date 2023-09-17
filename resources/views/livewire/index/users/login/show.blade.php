@php
    $showWidget = false;
@endphp

<div class="login_page">
    <div class="login">
        <div class="login_container">
            <div class="login_top">
                <span class="login_title">Hello Again!</span>
                <p class="login_description">It is a long established fact that a reader</p>
            </div>
            <form wire:submit="login" class="login_form">
                <input wire:model="form.email" class="login_input" type="email" placeholder="Email">
                @error('form.email')
                <span class="warning">{{$message}}</span>
                @enderror
                <input wire:model="form.password" class="login_input" type="password" placeholder="Password">
                @error('form.password')
                <span class="warning">{{$message}}</span>
                @enderror
                <div class="login_action">
                    <div class="remember_container">
                        <span class="remember">Remember Me</span>
                        <input class="remember_checkbox" type="checkbox">
                    </div>
                    <span class="recovery">Recovery Password</span>
                </div>
                <div class="login_button">
                    <button type="submit" class="normal_login">Login</button>
                    <div class="google_login">
                        <img class="google_icon" src="{{asset('asset/image/logo/users/login/google.svg')}}" alt="">
                        <a href="{{route('google-auth')}}">Sign in with Google</a>
                    </div>
                </div>
            </form>
            <div wire:loading.flex wire:target="login" class="loading_trade">
                <span class="loading_animate"></span>
            </div>
            <div class="none_register">
                <span class="none_login">Don't have an account yet?</span>
                <a class="signup_title" href="{{route('signup')}}">Sign Up</a>
            </div>
        </div>
    </div>
</div>
