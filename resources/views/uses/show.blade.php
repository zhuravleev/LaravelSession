@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/givething" class="link">Передать вещь</a>
    @foreach($uses as $use)
        <div class="show_container">
        <ul class="spisok">
            <li>Идентификатор вещи: {{$use->thing_id}}</li>
            <li>Идентификатор места: {{$use->place_id}}</li>
            <li>Идентификатор пользователя: {{$use->user_id}}</li>
            <li>Количество вещей: {{$use->amount}}</li>
        </ul>
        <a href="/updateuse/{{$use->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>



@endsection