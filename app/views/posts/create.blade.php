@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => 'PostsController@store')) }}
    <div class="form-group @if($errors->has('title')) has-error @endif">
        <label class="control-label" for="title">Title</label>
        <input type="text" class="form-control input-lg @if($errors->has('title')) has-error @endif" name="title" value="{{{ Input::old('title')}}}" placeholder="Please insert a title">
    </div>
    <div class="form-group @if($errors->has('body')) has-error @endif">
        <label class="control-label" for="body">Body</label>
        <textarea name="body" class="form-control input-lg " placeholder="Please insert a body">{{{ Input::old('body') }}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
{{ Form::close() }}
@stop