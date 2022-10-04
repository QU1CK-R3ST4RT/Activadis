@extends('layouts.layout')

@section('content')
    <div class="outer-container">
        <div class="login-container">
            <div class="align-login">
                <div>
                    <div class="image-holder"></div>
                </div>
                <form action="POST">
                    <div class="aligning">
                        <input type="text" placeholder="email of gebruikersnaam" class="login-input">
                        <input type="password" placeholder="Password" class="login-input">
                    </div>
                    <div class="aligning">
                        <div class="captcha-checkbox">
                            <input type="checkbox" name="captcha" class="captcha-box">
                            <label for="captcha">I am not a robot</label>
                        </div>
                        <button class="custom-btn">Log in</button>
                        <p class="register-indicator">Heeft u nog geen account? <a href="">registreer</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection