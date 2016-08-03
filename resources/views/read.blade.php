@extends('layout.app');

@section('content')
    <h1>
        Data
    </h1>
    <ul>
        @if(count($data))
            @foreach($data as $record)
                <li>{{$record->title}}</li>
            @endforeach
        @endif
            @stop



    </ul>

@stop