@extends('layouts.masterWO')

@section('content')

    @foreach ($posts as $key => $value)
        <div>
            <a class="ads-href" href="{{{action('WorkoutController@show', $value->id)}}}">
                <strong><u>{{{ $value->created_at }}}</u></strong>
            </a>
            <ul>
                @if(!empty($value->person))
                    <li>{{ $value->person }}</li>
                @endif
                @if(!empty($value->bench))
                    <li>Bench: {{ $value->bench }}</li>
                @endif
                @if(!empty($value->curl))
                    <li>Curl: {{ $value->curl }}</li>
                @endif
                @if(!empty($value->tris))
                    <li>Tris: {{ $value->tris }}</li>
                @endif
                @if(!empty($value->squat))
                    <li>Squat: {{ $value->squat }}</li>
                @endif
                @if(!empty($value->calves))
                    <li>Calves: {{ $value->calves }}</li>
                @endif
                @if(!empty($value->military_press))
                    <li>Military Press: {{ $value->military_press }}</li>
                @endif
                @if(!empty($value->deadlift))
                    <li>Deadlift: {{ $value->deadlift }}</li>
                @endif
                @if(!empty($value->hang_clean))
                    <li>Hang Clean: {{ $value->hang_clean }}</li>
                @endif
                @if(!empty($value->push_ups))
                    <li>Push Ups: {{ $value->push_ups }}</li>
                @endif
                @if(!empty($value->sit_ups))
                    <li>Sit Ups: {{ $value->sit_ups }}</li>
                @endif
                @if(!empty($value->pull_ups))
                    <li>Pull Ups: {{ $value->pull_ups }}</li>
                @endif
            </ul>
        </div><br>
    @endforeach

    {{ $posts->links() }}

@stop
