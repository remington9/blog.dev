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

    <label for="setCount">Uniform Rep Count:</label>
    <select class="form-control input-lg" ng-model="uniform.repCount">
      <option value="" selected disabled>Please select</option>
      <option ng-repeat="num in [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]">@{{ num }}</option>
    </select>
  </div>
</form>
</div>
{{ Form::open(array('action' => 'WorkoutController@store', 'name'=> 'workoutCreate','novalidate')) }}
    <div class="row">
    <div class="form-group" ng-class="{'has-error': workoutCreate.bench.$invalid && workoutCreate.bench.$touched, 'has-success': workoutCreate.bench.$valid && workoutCreate.bench.$touched}">
        <h3 class="control-label col-xs-2" for="bench">Bench</h3>
        <div class="col-xs-3"><br> Weight
          <select class="form-control input-lg" name="bench" ng-model="user.firstName" required>
              <option value="" selected disabled>Please select</option>
              @for ($i = 0; $i <= 400; $i+= 5)
                  <option>{{ $i }} lbs</option>
              @endfor
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
    <div class="form-group col-xs-3 @if($errors->has('curl')) has-error @endif">
        <label class="control-label" for="curl">Curls Weight</label>
        <select class="form-control input-lg @if($errors->has('curl')) has-error @endif" name="curl">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('curl_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('curl_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('tris')) has-error @endif">
        <label class="control-label" for="tris">Tris Weight</label>
        <select class="form-control input-lg @if($errors->has('tris')) has-error @endif" name="tris">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('tris_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('tris_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('squat')) has-error @endif">
        <label class="control-label" for="squat">Squat Weight</label>
        <select class="form-control input-lg @if($errors->has('squat')) has-error @endif" name="squat">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('squat_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('squat_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('calves')) has-error @endif">
        <label class="control-label" for="calves">Calves Weight</label>
        <select class="form-control input-lg @if($errors->has('calves')) has-error @endif" name="calves">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('calves_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('calves_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('military_press')) has-error @endif">
        <label class="control-label" for="military_press">Military Press Weight</label>
        <select class="form-control input-lg @if($errors->has('military_press')) has-error @endif" name="military_press">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('military_press_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('military_press_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('deadlift')) has-error @endif">
        <label class="control-label" for="deadlift">Deadlift Weight</label>
         <select class="form-control input-lg @if($errors->has('deadlift')) has-error @endif" name="deadlift">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('deadlift_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('deadlift_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('hang_clean')) has-error @endif">
        <label class="control-label" for="hang_clean">Hang Clean Weight</label>
        <select class="form-control input-lg @if($errors->has('hang_clean')) has-error @endif" name="hang_clean">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 400; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('hang_clean_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('hang_clean_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('push_ups')) has-error @endif">
        <label class="control-label" for="push_ups">Push Ups</label>
        <select class="form-control input-lg @if($errors->has('push_ups')) has-error @endif" name="push_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('push_ups_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('push_ups_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('sit_ups')) has-error @endif">
        <label class="control-label" for="sit_ups">Sit Ups</label>
        <select class="form-control input-lg @if($errors->has('sit_ups')) has-error @endif" name="sit_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('sit_ups_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('sit_ups_reps')) has-error @endif">
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
    <div class="form-group  col-xs-3 @if($errors->has('pull_ups')) has-error @endif">
        <label class="control-label" for="pull_ups">Pull Ups</label>
        <select class="form-control input-lg @if($errors->has('pull_ups')) has-error @endif" name="pull_ups">
            <option value="" selected disabled>Please select</option>
            @for ($i = 0; $i <= 100; $i+= 5)
                <option>{{ $i }} lbs</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-xs-3 @if($errors->has('pull_ups_sets')) has-error @endif">
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
    <div class="form-group col-xs-3 @if($errors->has('pull_ups_reps')) has-error @endif">
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