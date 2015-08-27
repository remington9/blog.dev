@extends('layouts.masterWO')

@section('content')

{{ Form::open(array('action' => 'WorkoutController@store')) }}
    <div class="form-group @if($errors->has('person')) has-error @endif">
        <label class="control-label" for="person">Person</label>
        <select name="person" class="form-control input-lg">
            <option>Remington</option>
            <option>Zakk</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('bench')) has-error @endif">
        <label class="control-label" for="bench">Bench Weight</label>
        <select class="form-control input-lg @if($errors->has('bench')) has-error @endif" name="bench">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('bench_sets')) has-error @endif">
        <label class="control-label" for="bench_sets">Bench Sets</label>
        <select class="form-control input-lg @if($errors->has('bench_sets')) has-error @endif" name="bench_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('bench_reps')) has-error @endif">
        <label class="control-label" for="bench_reps">Bench Reps</label>
        <select class="form-control input-lg @if($errors->has('bench_reps')) has-error @endif" name="bench_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('curl')) has-error @endif">
        <label class="control-label" for="curl">Curls Weight</label>
        <select class="form-control input-lg @if($errors->has('curl')) has-error @endif" name="curl">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('curl_sets')) has-error @endif">
        <label class="control-label" for="curl_sets">Curl Sets</label>
        <select class="form-control input-lg @if($errors->has('curl_sets')) has-error @endif" name="curl_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('curl_reps')) has-error @endif">
        <label class="control-label" for="curl_reps">Curl Reps</label>
        <select class="form-control input-lg @if($errors->has('curl_reps')) has-error @endif" name="curl_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('tris')) has-error @endif">
        <label class="control-label" for="tris">Tris Weight</label>
        <select class="form-control input-lg @if($errors->has('tris')) has-error @endif" name="tris">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('tris_sets')) has-error @endif">
        <label class="control-label" for="tris_sets">Tris Sets</label>
        <select class="form-control input-lg @if($errors->has('tris_sets')) has-error @endif" name="tris_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('tris_reps')) has-error @endif">
        <label class="control-label" for="tris_reps">Tris Reps</label>
        <select class="form-control input-lg @if($errors->has('tris_reps')) has-error @endif" name="tris_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('squat')) has-error @endif">
        <label class="control-label" for="squat">Squat Weight</label>
        <select class="form-control input-lg @if($errors->has('squat')) has-error @endif" name="squat">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('squat_sets')) has-error @endif">
        <label class="control-label" for="squat_sets">Squat Sets</label>
        <select class="form-control input-lg @if($errors->has('squat_sets')) has-error @endif" name="squat_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('squat_reps')) has-error @endif">
        <label class="control-label" for="squat_reps">Squat Reps</label>
        <select class="form-control input-lg @if($errors->has('squat_reps')) has-error @endif" name="squat_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('calves')) has-error @endif">
        <label class="control-label" for="calves">Calves Weight</label>
        <select class="form-control input-lg @if($errors->has('calves')) has-error @endif" name="calves">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('calves_sets')) has-error @endif">
        <label class="control-label" for="calves_sets">Calves Sets</label>
        <select class="form-control input-lg @if($errors->has('calves_sets')) has-error @endif" name="calves_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('calves_reps')) has-error @endif">
        <label class="control-label" for="calves_reps">Calves Reps</label>
        <select class="form-control input-lg @if($errors->has('calves_reps')) has-error @endif" name="calves_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('military_press')) has-error @endif">
        <label class="control-label" for="military_press">Military Press Weight</label>
        <select class="form-control input-lg @if($errors->has('military_press')) has-error @endif" name="military_press">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('military_press_sets')) has-error @endif">
        <label class="control-label" for="military_press_sets">Military Press Sets</label>
        <select class="form-control input-lg @if($errors->has('military_press_sets')) has-error @endif" name="military_press_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('military_press_reps')) has-error @endif">
        <label class="control-label" for="military_press_reps">Military Press Reps</label>
        <select class="form-control input-lg @if($errors->has('military_press_reps')) has-error @endif" name="military_press_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('deadlift')) has-error @endif">
        <label class="control-label" for="deadlift">Deadlift Weight</label>
         <select class="form-control input-lg @if($errors->has('deadlift')) has-error @endif" name="deadlift">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('deadlift_sets')) has-error @endif">
        <label class="control-label" for="deadlift_sets">Deadlift Sets</label>
        <select class="form-control input-lg @if($errors->has('deadlift_sets')) has-error @endif" name="deadlift_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('deadlift_reps')) has-error @endif">
        <label class="control-label" for="deadlift_reps">Deadlift Reps</label>
        <select class="form-control input-lg @if($errors->has('deadlift_reps')) has-error @endif" name="deadlift_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('hang_clean')) has-error @endif">
        <label class="control-label" for="hang_clean">Hang Clean Weight</label>
        <select class="form-control input-lg @if($errors->has('hang_clean')) has-error @endif" name="hang_clean">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('hang_clean_sets')) has-error @endif">
        <label class="control-label" for="hang_clean_sets">Hang Clean Sets</label>
        <select class="form-control input-lg @if($errors->has('hang_clean_sets')) has-error @endif" name="hang_clean_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('hang_clean_reps')) has-error @endif">
        <label class="control-label" for="hang_clean_reps">Hang Clean Reps</label>
        <select class="form-control input-lg @if($errors->has('hang_clean_reps')) has-error @endif" name="hang_clean_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('push_ups')) has-error @endif">
        <label class="control-label" for="push_ups">Push Ups</label>
        <select class="form-control input-lg @if($errors->has('push_ups')) has-error @endif" name="push_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('push_ups_sets')) has-error @endif">
        <label class="control-label" for="push_ups_sets">Push Ups Sets</label>
        <select class="form-control input-lg @if($errors->has('push_ups_sets')) has-error @endif" name="push_ups_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('push_ups_reps')) has-error @endif">
        <label class="control-label" for="push_ups_reps">Push Ups Reps</label>
        <select class="form-control input-lg @if($errors->has('push_ups_reps')) has-error @endif" name="push_ups_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('sit_ups')) has-error @endif">
        <label class="control-label" for="sit_ups">Sit Ups</label>
        <select class="form-control input-lg @if($errors->has('sit_ups')) has-error @endif" name="sit_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('sit_ups_sets')) has-error @endif">
        <label class="control-label" for="sit_ups_sets">Sit Ups Sets</label>
        <select class="form-control input-lg @if($errors->has('sit_ups_sets')) has-error @endif" name="sit_ups_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('sit_ups_reps')) has-error @endif">
        <label class="control-label" for="sit_ups_reps">Sit Ups Reps</label>
        <select class="form-control input-lg @if($errors->has('sit_ups_reps')) has-error @endif" name="sit_ups_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <div class="form-group  col-xs-4 @if($errors->has('pull_ups')) has-error @endif">
        <label class="control-label" for="pull_ups">Pull Ups</label>
        <select class="form-control input-lg @if($errors->has('pull_ups')) has-error @endif" name="pull_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('pull_ups_sets')) has-error @endif">
        <label class="control-label" for="pull_ups_sets">Pull Ups Sets</label>
        <select class="form-control input-lg @if($errors->has('pull_ups_sets')) has-error @endif" name="pull_ups_sets">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
    </div>
    <div class="form-group col-xs-4 @if($errors->has('pull_ups_reps')) has-error @endif">
        <label class="control-label" for="pull_ups_reps">Pull Ups Reps</label>
        <select class="form-control input-lg @if($errors->has('pull_ups_reps')) has-error @endif" name="pull_ups_reps">
          <option value="" selected disabled>Please select</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
{{ Form::close() }}


@stop