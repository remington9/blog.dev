@extends('layouts.masterWO')

@section('content')
    @foreach ($posts as $key => $value)
            <div class="col-sm-6 blog-main">
                    <div>
                        <a class="ads-href" href="{{{action('WorkoutController@show', $value->id)}}}">
                            <strong><u>{{ date('F d, Y', strtotime($value->created_at)) }}</u></strong>
                        </a>
                        <ul>
                            @if(!empty($value->person))
                                <li>{{ $value->person }}</li>
                            @endif
                            @if(!empty($value->bench))
                                <li>Bench: {{ $value->bench . " " . $value->bench_sets . " sets of " . $value->bench_reps}}</li>
                            @endif
                            @if(!empty($value->curl))
                                <li>Curl: {{ $value->curl . " " . $value->curl_sets . " sets of " . $value->curl_reps }}</li>
                            @endif
                            @if(!empty($value->tris))
                                <li>Tris: {{ $value->tris . " " . $value->tris_sets . " sets of " . $value->tris_reps }}</li>
                            @endif
                            @if(!empty($value->squat))
                                <li>Squat: {{ $value->squat . " " . $value->squat_sets . " sets of " . $value->squat_reps }}</li>
                            @endif
                            @if(!empty($value->calves))
                                <li>Calves: {{ $value->calves . " " . $value->calves_sets . " sets of " . $value->calves_reps }}</li>
                            @endif
                            @if(!empty($value->military_press))
                                <li>Military Press: {{ $value->military_press . " " . $value->military_press_sets . " sets of " . $value->military_press_reps }}</li>
                            @endif
                            @if(!empty($value->deadlift))
                                <li>Deadlift: {{ $value->deadlift . " " . $value->deadlift_sets . " sets of " . $value->deadlift_reps }}</li>
                            @endif
                            @if(!empty($value->hang_clean))
                                <li>Hang Clean: {{ $value->hang_clean . " " . $value->hang_clean_sets . " sets of " . $value->hang_clean_reps }}</li>
                            @endif
                            @if(!empty($value->push_ups))
                                <li>Push Ups: {{ $value->push_ups . " " . $value->push_ups_sets . " sets of " . $value->push_ups_reps }}</li>
                            @endif
                            @if(!empty($value->sit_ups))
                                <li>Sit Ups: {{ $value->sit_ups . " " . $value->sit_ups_sets . " sets of " . $value->sit_ups_reps }}</li>
                            @endif
                            @if(!empty($value->pull_ups))
                                <li>Pull Ups: {{ $value->pull_ups . " " . $value->pull_ups_sets . " sets of " . $value->pull_ups_reps }}</li>
                            @endif
                        </ul>
                    </div><br>
            </div>
    @endforeach
<div class="col-sm-12 blog-main">  
    {{ $posts->links() }}  
</div>
@stop