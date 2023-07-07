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
color: #050505;
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
<!-- Login Page -->
<div class="register-container">
  <h1 class="register-header">Iniciar sesión</h1>


  <form method="POST" action="{{ route('login') }}">
    @csrf
    
    <label for="email" class="email">Correo</label>
    <input type="email" id="email" class="register-input" name="email" placeholder="Ingresa tu correo" required>

    <label for="password" class="password">Contraseña</label>
    <input type="password" id="password" class="register-input" name="password" placeholder="Ingresa tu contraseña" required>


    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


    <button type="submit" class="register-button">Iniciar sesión</button>

    <div class="signup-options">
      <span class="signup-options-text">¿No tienes una cuenta?</span>
      <a href="/register" class="signup-options-link">Regístrate</a>
    </div>
  </form>
</div>
  @endsection