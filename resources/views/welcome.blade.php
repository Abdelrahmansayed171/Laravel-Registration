@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <span class="close">X</span>
        <form action="/authenticate" method="post" class="form-login" enctype="multipart/form-data">
        @csrf
        <h2>login</h2>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="email" name="email" required>
            <label for="">email</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="password" required minlength="8" maxlength="16">
            <label for="">password</label>
        </div>
        <div class="remember">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password ?</a>
        </div>
        <button type="submit" name="loginSubmit" class="loginBtn">Login</button>
        <div class="register">
            <p>
            Don`t have an account?
            <a href="#" class="register-link">Register</a>
            </p>
        </div>
        </form>

        <form action="/register" method="post" class="form-register" enctype="multipart/form-data">
        @csrf
        <h2>Register</h2>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="full_name" id="fullName" onfocusout="fullNameValidation()" required>
            <p class="hint">hi</p>
            <label for="">full name</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="username" id="userName" onfocusout="userNameValidation()" required>
            {{-- <img src="imgs/cancel-error-svgrepo-com.svg" class="false hide" alt=""> --}}
            <img src="{{ asset('images/cancel-error-svgrepo-com.svg') }}" class="false hide" alt="">

            {{-- <img src="imgs/confirm-svgrepo-com.svg" class="true hide"  alt=""> --}}
            <img src="{{ asset('images/confirm-svgrepo-com.svg') }}" class="true hide"  alt="">

            <!-- <p class="hint">hi</p> -->
            <label for="">user name</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="email" name="email" id="email" onfocusout="emailValidation()" required>
            <p class="hint">hi</p>
            <label for="">email</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="date" id="birthdate" name="birthdate" onfocusout="dateValidation()" required>
            <p class="hint">hi</p>        
            <span class="IMDPAPIBtn">actors</span>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="phone" id="phone" required minlength="11" maxlength="11" onfocusout="phoneValidation()"> 
            <p class="hint"></p>
            <label for="">phone</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="address" id="address" required onfocusout="addressValidation()">
            <p class="hint"></p>
            <label for="">address</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="password" id="password" required minlength="8" maxlength="16" onfocusout="passwordValidation()">
            <p class="hint">hi</p>
            <label for="">password</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="passwordRepeat" id="confirmPassword" required minlength="4" maxlength="10" onfocusout="confirmPasswordValidation()">
            <p class="hint">hi</p>
            <label for="">confirm password</label>
        </div>
        <div class="input-box">
            <input type="file" required class="custom-file-input" id="select_image" name="image" onchange="putImage()" />
        </div>
        <button type="submit" class="registerBtn" name="submit" value="Register">Register
        </button>
        <div class="login">
            <p>
            have an account?
            <a href="#" class="login-link">Login</a>
            </p>
        </div>
        </form>
    </div>
    <div class="popupApi">
        <div class="title"></div>
        <div class="events">
          </div>
    </div>
@endsection