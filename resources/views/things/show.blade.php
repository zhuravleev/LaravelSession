@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/creatething" class="link">Создать вещь</a>
    @foreach($things as $thing)
        <div class="show_container">
        <ul class="spisok">
            <li>Название вещи: {{$thing->name}}</li>
            <li>Описание: {{$thing->description}}</li>
            <li>Срок годности: {{$thing->wrnt}}</li>
            <li>Идентификатор создателя: {{$thing->master}}</li>
        </ul>
        <a href="/deletething/{{$thing->id}}" class="link_make">Удалить</a>
        <a href="/updatething/{{$thing->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>


@endsection