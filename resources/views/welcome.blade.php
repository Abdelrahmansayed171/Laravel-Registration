@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <span class="close">X</span>
        <form action="/authenticate" method="post" class="form-login" enctype="multipart/form-data">
        @csrf
        <h2>{{__('login.header')}}</h2>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="email" name="email" required>
            <label for="">{{__('login.email')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="password" required minlength="8" maxlength="16">
            <label for="">{{__('login.password')}}</label>
        </div>
        <div class="remember">
            <label><input type="checkbox">{{__('login.remember')}}</label>
            <a href="#">{{__('login.warning')}}</a>
        </div>
        <button type="submit" name="loginSubmit" class="loginBtn">Login</button>
        <div class="register">
            <p>
                {{__('login.ending')}}
            <a href="#" class="register-link">{{__('login.button')}}</a>
            </p>
        </div>
        </form>

        <form action="/register" method="post" class="form-register" enctype="multipart/form-data">
        @csrf
        <h2>{{__('register.header')}}</h2>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="full_name" id="fullName" onfocusout="fullNameValidation()" required>
            <p class="hint">hi</p>
            <label for="">{{__('register.fullname')}}</label>
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
            <label for="">{{__('register.username')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="email" name="email" id="email" onfocusout="emailValidation()" required>
            <p class="hint">hi</p>
            <label for="">{{__('register.email')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="date" id="birthdate" name="birthdate" onfocusout="dateValidation()" required>
            <p class="hint">hi</p>        
            <span class="IMDPAPIBtn">{{__('register.actors')}}</span>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="phone" id="phone" required minlength="11" maxlength="11" onfocusout="phoneValidation()"> 
            <p class="hint"></p>
            <label for="">{{__('register.phone')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="text" name="address" id="address" required onfocusout="addressValidation()">
            <p class="hint"></p>
            <label for="">{{__('register.address')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="password" id="password" required minlength="8" maxlength="16" onfocusout="passwordValidation()">
            <p class="hint">hi</p>
            <label for="">{{__('register.password')}}</label>
        </div>
        <div class="input-box">
            <span class="icon">
            *
            </span>
            <input type="password" name="passwordRepeat" id="confirmPassword" required minlength="4" maxlength="10" onfocusout="confirmPasswordValidation()">
            <p class="hint">hi</p>
            <label for="">{{__('register.confirmpassword')}}</label>
        </div>
        <div class="input-box">
            <input type="file" class="custom-file-input" id="select_image" name="image" onchange="putImage()" />
        </div>
        <button type="submit" class="registerBtn" name="submit" value="Register">
            {{__('register.button')}}
        </button>
        <div class="login">
            <p>
                {{__('register.ending')}}
            <a href="#" class="login-link">{{__('register.link')}}</a>
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