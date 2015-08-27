@extends('layouts.masterWO')

@section('content')

<div class="col-sm-6 blog-main">
        <div>
            <strong><u>{{ date('F d, Y', strtotime($posts->created_at)) }}</u></strong>
            <ul>
                @if(!empty($posts->person))
                    <li>{{ $posts->person }}</li>
                @endif
                @if(!empty($posts->bench))
                    <li>Bench: {{ $posts->bench . " " . $posts->bench_sets . " sets of " . $posts->bench_reps}}</li>
                @endif
                @if(!empty($posts->curl))
                    <li>Curl: {{ $posts->curl . " " . $posts->curl_sets . " sets of " . $posts->curl_reps }}</li>
                @endif
                @if(!empty($posts->tris))
                    <li>Tris: {{ $posts->tris . " " . $posts->tris_sets . " sets of " . $posts->tris_reps }}</li>
                @endif
                @if(!empty($posts->squat))
                    <li>Squat: {{ $posts->squat . " " . $posts->squat_sets . " sets of " . $posts->squat_reps }}</li>
                @endif
                @if(!empty($posts->calves))
                    <li>Calves: {{ $posts->calves . " " . $posts->calves_sets . " sets of " . $posts->calves_reps }}</li>
                @endif
                @if(!empty($posts->military_press))
                    <li>Military Press: {{ $posts->military_press . " " . $posts->military_press_sets . " sets of " . $posts->military_press_reps }}</li>
                @endif
                @if(!empty($posts->deadlift))
                    <li>Deadlift: {{ $posts->deadlift . " " . $posts->deadlift_sets . " sets of " . $posts->deadlift_reps }}</li>
                @endif
                @if(!empty($posts->hang_clean))
                    <li>Hang Clean: {{ $posts->hang_clean . " " . $posts->hang_clean_sets . " sets of " . $posts->hang_clean_reps }}</li>
                @endif
                @if(!empty($posts->push_ups))
                    <li>Push Ups: {{ $posts->push_ups . " " . $posts->push_ups_sets . " sets of " . $posts->push_ups_reps }}</li>
                @endif
                @if(!empty($posts->sit_ups))
                    <li>Sit Ups: {{ $posts->sit_ups . " " . $posts->sit_ups_sets . " sets of " . $posts->sit_ups_reps }}</li>
                @endif
                @if(!empty($posts->pull_ups))
                    <li>Pull Ups: {{ $posts->pull_ups . " " . $posts->pull_ups_sets . " sets of " . $posts->pull_ups_reps }}</li>
                @endif
            </ul>
        </div><br>
</div>

        <a class="ads-href" href="{{{action('WorkoutController@edit', $posts->id)}}}"><button class="btn btn-success btn-lrg">Edit</button></a>
        <button id="delete" class="btn btn-danger btn-lrg">Delete</button>

    {{ Form::open(array('action' => array('WorkoutController@destroy', $posts->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        
    {{ Form::close() }}
    
@stop
@section('script')
    <script>
        (function(){
            "use strict";

            $('#delete').on('click', function(){
                var onConfirm = confirm('Are you sure you want to? There is no turning back!');

                if(onConfirm){
                    $('#formDelete').submit();
                }
            });
        })();
    </script>
@stop