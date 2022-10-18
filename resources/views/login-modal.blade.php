@extends('layouts.page-layout')

@section('title')
    Activadis Login
@endsection

@section('content')
    <div class="outer-container">
        <div class="login-container">
            <div class="align-login">
                <div>
                    <div class="image-holder"></div>
                </div>
                <form method="POST">
                    @csrf
                    <div class="aligning">
                        <input type="text" placeholder="email of gebruikersnaam" name="email" class="login-input">
                        <input type="password" placeholder="Password" class="login-input" name="password">
                    </div>
                    <div class="aligning">
                        <div class="captcha-checkbox">
                            <input type="checkbox" name="captcha" class="captcha-box" required>
                            <label for="captcha">I am not a robot</label>
                        </div>
                        <button type="submit" class="custom-btn">Log in</button>
                        <p class="register-indicator">Heeft u nog geen account? <a href="">registreer</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
