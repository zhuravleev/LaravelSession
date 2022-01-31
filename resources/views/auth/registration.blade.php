@extends('layouts.layout')
@section('content')

<div class="for_form">
<h3>Регистрация</h3>

<form action="/api/reg" method="post">
    @csrf
    <div class="form_style">
        <label for="name" class="for_label">Введите имя пользователя</label>
        <input type="text" name="name" id="name" class="for_input">
        <label for="email" class="for_label">Введите e-mail</label>
        <input type="email" name="email" id="email" class="for_input">
        <label for="password" class="for_label">Придумайте пароль (не менее 6 символов)</label>
        <input type="password" name="password" id="password" class="for_input">
        <button type="submit" class="btn">Зарегстрироваться</button>
    </div>
    @if($errors->has('email'))
        <span>{{ $errors->first('email')}}</span>
    @endif
</form>
</div>
@endsection