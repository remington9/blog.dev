@extends('layouts.masterWO')

@section('content')

<div class="row">
<div class="col-md-6"><h2>{{{ Auth::user()->first_name }}}</h2></div>
<form nonvalidate name="uniform">
  <div class="form-group well col-xs-6">
    <label for="setCount">Uniform Set Count:</label>
    <select class="form-control input-lg" ng-model="uniform.setCount">
      <option value="" selected disabled>Please select</option>
      <option ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
    </select>

    <label for="repCount">Uniform Rep Count:</label>
    <select class="form-control input-lg" ng-model="uniform.repCount">
      <option value="" selected disabled>Please select</option>
      <option ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
    </select>
  </div>
</form>
</div>
{{ Form::open(array('action' => 'WorkoutController@store', 'name'=> 'workoutCreate','novalidate')) }}
    <div class="row well" ng-controller="Weight">
        <div class="form-group" ng-class="{'has-warning': workoutCreate.bench_weight.$invalid && workoutCreate.bench_weight.$touched, 'has-success': workoutCreate.bench_weight.$valid && workoutCreate.bench_weight.$touched}">
            <h3 class="control-label col-xs-2" for="bench">Bench</h3>
            <div class="col-xs-3"><br> Weight
                <select class="form-control input-lg" name="bench_weight" ng-model="workoutCreate.bench_weight" required>
                    <option value="" selected disabled>Please select</option>
                    <option ng-repeat="weight in weightList" value="@{{weight}}">@{{weight}}</option>
                </select>
            </div>
            <div class="col-xs-3"><br>Sets
                <select class="form-control input-lg" name="bench_sets" >
                    <option value="" selected disabled>Please select</option>
                    <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
                </select>
            </div>
            <div class="col-xs-3"><br>Reps
                <select class="form-control input-lg" name="bench_reps">
                  <option value="" selected disabled>Please select</option>
                  <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
                </select>
            </div>
         </div>
    </div>
    <div class="row well">
        <div class="form-group" ng-class="{'has-warning': workoutCreate.curl_weight.$invalid && workoutCreate.curl_weight.$touched, 'has-success': workoutCreate.curl_weight.$valid && workoutCreate.curl_weight.$touched}">
            <h3 class="control-label col-xs-2" for="curls">Curls</h3>
            <div class="col-xs-3"><br> Weight
                <select class="form-control input-lg" name="curl_weight" ng-model="workoutCreate.curl_weight" required>
                    <option value="" selected disabled>Please select</option>
                    @for ($i = 0; $i <= 500; $i+= 5)
                        <option>{{ $i }} lbs</option>
                    @endfor
                </select>
            </div>
            <div class="col-xs-3"><br> Sets
                <select class="form-control input-lg @if($errors->has('curl_sets')) has-error @endif" name="curl_sets">
                    <option value="" selected disabled>Please select</option>
                    <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
                </select>
            </div>
            <div class="col-xs-3"><br> Reps
                <select class="form-control input-lg @if($errors->has('curl_reps')) has-error @endif" name="curl_reps">
                    <option value="" selected disabled>Please select</option>
                    <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row well">
        <div class="form-group" ng-class="{'has-warning': workoutCreate.tris_weight.$invalid && workoutCreate.tris_weight.$touched, 'has-success': workoutCreate.tris_weight.$valid && workoutCreate.tris_weight.$touched}">
            <h3 class="control-label col-xs-2" for="curls">Tris</h3>
            <div class="col-xs-3"><br> Weight
                <select class="form-control input-lg @if($errors->has('tris_weight')) has-error @endif" name="tris_weight">
                    <option value="" selected disabled>Please select</option>
                    @for ($i = 0; $i <= 500; $i+= 5)
                        <option>{{ $i }} lbs</option>
                    @endfor
                </select>
            </div>
            <div class="col-xs-3"><br> Sets
                <select class="form-control input-lg @if($errors->has('tris_sets')) has-error @endif" name="tris_sets">
                  <option value="" selected disabled>Please select</option>
                    <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
                </select>
            </div>
            <div class="col-xs-3"><br> Reps
                <select class="form-control input-lg @if($errors->has('tris_reps')) has-error @endif" name="tris_reps">
                    <option value="" selected disabled>Please select</option>
                    <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
                </select>
            </div>
        </div>
    </div>
<div class="row well">
    <div class="form-group" ng-class="{'has-warning': workoutCreate.squat_weight.$invalid && workoutCreate.squat_weight.$touched, 'has-success': workoutCreate.squat_weight.$valid && workoutCreate.squat_weight.$touched}">
        <h3 class="control-label col-xs-2" for="curls">Squat</h3>
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('squat_weight')) has-error @endif" name="squat">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 500; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('squat_sets')) has-error @endif" name="squat_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('squat_reps')) has-error @endif" name="squat_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="curls">Calves</h3>
    <div class="form-group @if($errors->has('calves')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('calves_weight')) has-error @endif" name="calves_weight">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 500; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('calves_sets')) has-error @endif" name="calves_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('calves_reps')) has-error @endif" name="calves_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="curls">Military Press</h3>
    <div class="form-group @if($errors->has('military_press')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('military_press')) has-error @endif" name="military_press">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 500; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('military_press_sets')) has-error @endif" name="military_press_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('military_press_reps')) has-error @endif" name="military_press_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="curls">Deadlift</h3>
    <div class="form-group @if($errors->has('deadlift')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('deadlift')) has-error @endif" name="deadlift">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 500; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('deadlift_sets')) has-error @endif" name="deadlift_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('deadlift_reps')) has-error @endif" name="deadlift_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="hang_clean">Hang Clean</h3>
    <div class="form-group @if($errors->has('hang_clean')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('hang_clean')) has-error @endif" name="hang_clean">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 500; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('hang_clean_sets')) has-error @endif" name="hang_clean_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('hang_clean_reps')) has-error @endif" name="hang_clean_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="push_ups">Push Ups</h3>
    <div class="form-group @if($errors->has('push_ups')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('push_ups')) has-error @endif" name="push_ups">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 100; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('push_ups_sets')) has-error @endif" name="push_ups_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('push_ups_reps')) has-error @endif" name="push_ups_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
    <div class="row well">
        <h3 class="control-label col-xs-2" for="sit_ups">Sit Ups</h3> <div class="form-group @if($errors->has('sit_ups')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('sit_ups')) has-error @endif" name="sit_ups">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 100; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('sit_ups_sets')) has-error @endif" name="sit_ups_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('sit_ups_reps')) has-error @endif" name="sit_ups_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
<div class="row well">
    <h3 class="control-label col-xs-2" for="pull_ups">Pull Ups</h3>
    <div class="form-group @if($errors->has('pull_ups')) has-error @endif">
        <div class="col-xs-3"><br>Weight
            <select class="form-control input-lg @if($errors->has('pull_ups')) has-error @endif" name="pull_ups">
                <option value="" selected disabled>Please select</option>
                @for ($i = 0; $i <= 100; $i+= 5)
                    <option>{{ $i }} lbs</option>
                @endfor
            </select>
        </div>
        <div class="col-xs-3"><br>Sets
            <select class="form-control input-lg @if($errors->has('pull_ups_sets')) has-error @endif" name="pull_ups_sets">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.setCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8]">@{{ num }}</option>
            </select>
        </div>
        <div class="col-xs-3"><br>Reps
            <select class="form-control input-lg @if($errors->has('pull_ups_reps')) has-error @endif" name="pull_ups_reps">
                <option value="" selected disabled>Please select</option>
                <option ng-selected="num == uniform.repCount" ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
            </select>
        </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary btn-block" ng-disabled="workoutCreate.$invalid">Submit</button>
{{ Form::close() }}


@stop