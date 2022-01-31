@extends('layouts.layout')
@section('content')

<div class="for_form">
<h3>Авторизация</h3>

<form action="/custom-login" method="post">
    @csrf
    <div class="form_style">
        <label for="email" class="for_label">Введите e-mail</label>
        <input type="email" name="email" id="email" class="for_input">
        <label for="password" class="for_label">Введите пароль</label>
        <input type="password" name="password" id="password" class="for_input">
        
        <button type="submit" class="btn">Войти</button>
    </div>
</form>
</div>
@endsection