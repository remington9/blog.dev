<?php

class Workout extends Eloquent
{
    protected $table = 'workout';

    public static $rules = array(
    'title'      => 'max:100',
    'body'       => 'max:100',
    'person'        => 'max:100',
    'bench'        => 'max:100',
    'curl'        => 'max:100',
    'tris'        => 'max:100',
    'squat'        => 'max:100',
    'calves'        => 'max:100',
    'military_press'        => 'max:100',
    'deadlift'        => 'max:100',
    'hang_clean'        => 'max:100',
    'push_ups'        => 'max:100',
    'sit_ups'        => 'max:100',
    'pull_ups'        => 'max:100'
    );
}