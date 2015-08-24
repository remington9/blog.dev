@extends('layouts.master')

@section('content')
    <div>
        <strong><u>{{{ $posts->title }}}</u></strong>
        <ul>
            <li>{{{ $posts->body }}}</li>
        </ul>
    </div><br>
@stop