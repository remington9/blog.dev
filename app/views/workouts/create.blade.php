@extends('layouts.masterWO')

@section('content')

{{ Form::open(array('action' => 'WorkoutController@store')) }}
    <div class="form-group @if($errors->has('person')) has-error @endif">
        <label class="control-label" for="person">Person</label>
        <select name="person" class="form-control">
            <option>Remington</option>
            <option>Zakk</option>
        </select>
    </div>
    <div class="form-group @if($errors->has('bench')) has-error @endif">
        <label class="control-label" for="bench">Bench</label>
        <input type="text" class="form-control input-lg @if($errors->has('bench')) has-error @endif" name="bench" value="{{{ Input::old('bench')}}}" placeholder="Please insert a bench">
    </div>
    <div class="form-group @if($errors->has('tris')) has-error @endif">
        <label class="control-label" for="tris">Tris</label>
        <input type="text" class="form-control input-lg @if($errors->has('tris')) has-error @endif" name="tris" value="{{{ Input::old('tris')}}}" placeholder="Please insert a tris">
    </div>
    <div class="form-group @if($errors->has('squat')) has-error @endif">
        <label class="control-label" for="squat">squat</label>
        <input type="text" class="form-control input-lg @if($errors->has('squat')) has-error @endif" name="squat" value="{{{ Input::old('squat')}}}" placeholder="Please insert a squat">
    </div>
    <div class="form-group @if($errors->has('calves')) has-error @endif">
        <label class="control-label" for="calves">Calves</label>
        <input type="text" class="form-control input-lg @if($errors->has('calves')) has-error @endif" name="calves" value="{{{ Input::old('calves')}}}" placeholder="Please insert a calves">
    </div>
    <div class="form-group @if($errors->has('military_press')) has-error @endif">
        <label class="control-label" for="military_press">Military Press</label>
        <input type="text" class="form-control input-lg @if($errors->has('military_press')) has-error @endif" name="military_press" value="{{{ Input::old('military_press')}}}" placeholder="Please insert a military press">
    </div>
    <div class="form-group @if($errors->has('deadlift')) has-error @endif">
        <label class="control-label" for="deadlift">Deadlift</label>
        <input type="text" class="form-control input-lg @if($errors->has('deadlift')) has-error @endif" name="deadlift" value="{{{ Input::old('deadlift')}}}" placeholder="Please insert a deadlift">
    </div>
    <div class="form-group @if($errors->has('hang_clean')) has-error @endif">
        <label class="control-label" for="hang_clean">Hang Clean</label>
        <input type="text" class="form-control input-lg @if($errors->has('hang_clean')) has-error @endif" name="hang_clean" value="{{{ Input::old('hang_clean')}}}" placeholder="Please insert a Hang Clean">
    </div>
    <div class="form-group @if($errors->has('push_ups')) has-error @endif">
        <label class="control-label" for="push_ups">Push Ups</label>
        <input type="text" class="form-control input-lg @if($errors->has('push_ups')) has-error @endif" name="push_ups" value="{{{ Input::old('push_ups')}}}" placeholder="Please insert a Push Ups">
    </div>
    <div class="form-group @if($errors->has('sit_ups')) has-error @endif">
        <label class="control-label" for="sit_ups">Sit Ups</label>
        <input type="text" class="form-control input-lg @if($errors->has('sit_ups')) has-error @endif" name="sit_ups" value="{{{ Input::old('sit_ups')}}}" placeholder="Please insert a Sit Ups">
    </div>
    <div class="form-group @if($errors->has('pull_ups')) has-error @endif">
        <label class="control-label" for="pull_ups">Pull Ups</label>
        <input type="text" class="form-control input-lg @if($errors->has('pull_ups')) has-error @endif" name="pull_ups" value="{{{ Input::old('pull_ups')}}}" placeholder="Please insert a Pull Ups">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
{{ Form::close() }}
@stop