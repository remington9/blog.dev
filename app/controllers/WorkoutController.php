<?php

class WorkoutController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Workout::paginate(4);
		return View::make('workouts.index')->with('posts',$posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('workouts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// var_dump(Input::get());

	    // create the validator
	    $validator = Validator::make(Input::all(), Workout::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

			$post = new Workout();
		    $post->person = Input::get('person');
			$post->bench = Input::get('bench');
			$post->curl = Input::get('curl');
			$post->tris = Input::get('tris');
			$post->squat = Input::get('squat');
			$post->calves = Input::get('calves');
			$post->military_press = Input::get('military_press');
			$post->deadlift = Input::get('deadlift');
			$post->hang_clean = Input::get('hang_clean');
			$post->push_ups = Input::get('push_ups');
			$post->sit_ups = Input::get('sit_ups');
			$post->pull_ups = Input::get('pull_ups');
		    $post->save();

		    return Redirect::action('WorkoutController@index');
		}
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Workout::find($id);
		return View::make('workouts.show')->with('posts',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Workout::find($id);
		return View::make('workouts.edit')->with('post',$post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	

	    // create the validator
	    $validator = Validator::make(Input::all(), Workout::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = Workout::find($id);
		    $post->person = Input::get('person');
			$post->bench = Input::get('bench');
			$post->curl = Input::get('curl');
			$post->tris = Input::get('tris');
			$post->squat = Input::get('squat');
			$post->calves = Input::get('calves');
			$post->military_press = Input::get('military_press');
			$post->deadlift = Input::get('deadlift');
			$post->hang_clean = Input::get('hang_clean');
			$post->push_ups = Input::get('push_ups');
			$post->sit_ups = Input::get('sit_ups');
			$post->pull_ups = Input::get('pull_ups');
		    $post->save();

		    return Redirect::action('WorkoutController@index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Workout::find($id);
		$post->delete();

		return Redirect::action('WorkoutController@index');
	}


}
