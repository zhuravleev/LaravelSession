@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/createplace" class="link">Создать место</a>
    @foreach($places as $place)
        <div class="show_container">
        <ul class="spisok">
            <li>Название места: {{$place->name}}</li>
            <li>Описание: {{$place->description}}</li>
            <li>На починке: {{$place->repair}}</li>
            <li>В работе: {{$place->work}}</li>
            <li>Идентификатор места: {{$place->id}}</li>
        </ul>
        <a href="/deleteplace/{{$place->id}}" class="link_make">Удалить</a>
        <a href="/updateplace/{{$place->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>



@endsection