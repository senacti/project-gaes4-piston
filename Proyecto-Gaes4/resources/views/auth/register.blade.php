<style>
  body {
margin: 0;
padding: 0;
font-family: Arial, sans-serif;
background-color: #ffffff;
color: #000000;
}

/* Login Page */

.login-container {
margin: 100px auto;
width: 90%;
max-width: 400px;
background-color: #df1717;
border-radius: 5px;
padding: 40px;
text-align: center;
}

.login-header {
font-size: 28px;
margin-bottom: 20px;
}

.login-input {
width: 100%;
padding: 15px;
margin-bottom: 20px;
background-color: #000000;
border: none;
border-radius: 3px;
color: #fffdfd;
outline: none;
}

.login-button {
width: 100%;
padding: 15px;
background-color: #ffffff;
color: #fff;
font-weight: bold;
border: none;
border-radius: 3px;
cursor: pointer;
outline: none;
}

.login-button:hover {
background-color: #000000;
}

.login-options {
margin-top: 20px;
display: flex;
justify-content: space-between;
align-items: center;
font-size: 14px;
}

.login-options-label {
margin-left: 5px;
}

.login-options-link {
text-decoration: none;
color: #030303;
}

.login-options-link:hover {
text-decoration: underline;
}

.signup-container {
margin-top: 20px;
font-size: 16px;
}

.signup-text {
color: #000000;
}

.signup-link {
margin-left: 5px;
text-decoration: none;
color: #000000;
font-weight: bold;
}

.signup-link:hover {
text-decoration: underline;
}

/* Register Page */

.register-container {
margin: 100px auto;
width: 90%;
max-width: 400px;
background-color: #292929;
border-radius: 5px;
padding: 40px;
text-align: center;
}

.email{

  color: #ffffff;
}


.password{

  color: #fdf9f9;
}




.register-header {
font-size: 28px;
margin-bottom: 20px;
color: #ffffff;
}

.register-input {
width: 100%;
padding: 15px;
margin-bottom: 20px;
background-color: #ffffff;
border: none;
border-radius: 3px;
color: #ee1414;
outline: none;
}

.register-button {
width: 100%;
padding: 15px;
background-color: #ff9100;
color: #fff;
font-weight: bold;
border: none;
border-radius: 3px;
cursor: pointer;
outline: none;
}

.register-button:hover {
background-color: #0074d3;
}

.signup-options {
margin-top: 20px;
display: flex;
justify-content: center;
align-items: center;
font-size: 14px;
}

.signup-options-text {
color: #ffffff;
}

.signup-options-link {
margin-left: 5px;
text-decoration: none;
color: #fff;
font-weight: bold;
}

.signup-options-link:hover {
text-decoration: underline;
}


.form-label{

  color: #ffffff;
}


</style>







@extends('layouts.app')

@section('content')
<div class="container">
  <div class="register-container">
      <h1 class="register-header">Registrarse</h1>

      <form>
        <div class="form-group">

                      @csrf

                      <div class="form-group">
                          <label for="name" class="form-label">{{ __('Nombre') }}</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror      
                      </div>
                  
            
                      <div class="form-group">

                          <label for="email" class="form-label">{{ __('Correo') }}</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror      
                      
                      </div>

                 
                      <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  
                  </div>


                      <div class="form-group">
                      <label for="password-confirm" class="form-label">{{ __('Confirmar contraseña') }}</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
<br>
<button type="submit" class="register-button">Regístrate</button>

              <div class="signup-options">
              <span class="signup-options-text">¿Ya tienes una cuenta?</span>
              <a href="/login" class="signup-options-link">Inicia sesión</a>
              </div>
              </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection













<form method="POST" action="{{ route('register') }}">