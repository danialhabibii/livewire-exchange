<div class="login_page">
    <div class="login">
        <div class="login_container">
            <div class="login_top">
                <span class="login_title">Hello !</span>
                <p class="login_description">It is a long established fact that a reader</p>
            </div>
            <form wire:submit="register" class="login_form">
                <input wire:model.live="form.fullname" class="login_input" type="text" placeholder="Full Name">
                @error('form.fullname')
                <span class="warning">{{$message}}</span>
                @enderror
                <input wire:model.live="form.email" class="login_input" type="email" placeholder="Email">
                @error('form.email')
                <span class="warning">{{$message}}</span>
                @enderror
                <input wire:model.live="form.password" class="login_input" type="password" placeholder="Password">
                @error('form.password')
                <span class="warning">{{$message}}</span>
                @enderror
                <input wire:model.live="form.password_confirmation" class="login_input" type="password" placeholder="Password Confirmation">
                @error('form.password_confirmation')
                <span class="warning">{{$message}}</span>
                @enderror
                <input class="login_input" type="text" placeholder="Invite code (optional)" value="{{ session('invite_code') ? session('invite_code') : '' }}">
                @error('form.invite_code')
                <span class="warning">{{$message}}</span>
                @enderror
                <div class="login_button">
                    <button type="submit" class="normal_login">Sign Up</button>
                    <div class="google_login">
                        <img class="google_icon" src="{{asset('asset/image/logo/users/login/google.svg')}}" alt="">
                        <a href="{{route('google-auth')}}">Sign up with Google</a>
                    </div>
                </div>
            </form>
            <div wire:loading.flex wire:target="register" class="loading_trade">
                <span class="loading_animate"></span>
            </div>
            <div class="none_register">
                <span class="none_login">Do you already have an account?</span>
                <a class="signup_title" href="{{route('login')}}">Login</a>
            </div>
        </div>
    </div>
</div>
