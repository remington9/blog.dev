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

	public function howTo()
	{
		return View::make('workouts.howTo');
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




		$workouts = [
				'bench',
				'curl',
				'tris',
				'squat',
				'calves',
				'military_press',
				'deadlift',
				'hang_clean',
				'push_ups',
				'sit_ups',
				'pull_ups'
		];

        $input = Input::all();

		foreach ($workouts as $workout){

			if ($input["$workout" . "_weight"] != ''){
				$rules["$workout" . "_reps"] = "required";
                $rules["$workout" . "_sets"] = "required";
            }
		}
		dd($rules);




			$post = new Workout();
		    $post->person = Auth::user()->first_name;
			$post->user_id = Auth::id();
		    $post->save();

		    return Redirect::action('WorkoutController@index');
		
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
	public function profile()
	{
		$posts = Workout::where('user_id', Auth::id())->paginate(4);
		return View::make('workouts.profile')->with('posts',$posts);
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
			$post->bench_sets = Input::get('bench_sets');
			$post->bench_reps = Input::get('bench_reps');
			$post->curl = Input::get('curl');
			$post->curl_sets = Input::get('curl_sets');
			$post->curl_reps = Input::get('curl');
			$post->tris = Input::get('tris');
			$post->tris_sets = Input::get('tris_sets');
			$post->tris_reps = Input::get('tris_reps');
			$post->squat = Input::get('squat');
			$post->squat_sets = Input::get('squat_sets');
			$post->squat_reps = Input::get('squat_reps');
			$post->calves = Input::get('calves');
			$post->calves_sets = Input::get('calves_sets');
			$post->calves_reps = Input::get('calves_reps');
			$post->military_press = Input::get('military_press');
			$post->military_press_sets = Input::get('military_press_sets');
			$post->military_press_reps = Input::get('military_press_reps');
			$post->deadlift = Input::get('deadlift');
			$post->deadlift_sets = Input::get('deadlift_sets');
			$post->deadlift_reps = Input::get('deadlift_reps');
			$post->hang_clean = Input::get('hang_clean');
			$post->hang_clean_sets = Input::get('hang_clean_sets');
			$post->hang_clean_reps = Input::get('hang_clean_reps');
			$post->push_ups = Input::get('push_ups');
			$post->push_ups_sets = Input::get('push_ups_sets');
			$post->push_ups_reps = Input::get('push_ups_reps');
			$post->sit_ups = Input::get('sit_ups');
			$post->sit_ups_sets = Input::get('sit_ups_sets');
			$post->sit_ups_reps = Input::get('sit_ups_reps');
			$post->pull_ups = Input::get('pull_ups');
			$post->pull_ups_sets = Input::get('pull_ups_sets');
			$post->pull_ups_reps = Input::get('pull_ups_reps');
			$post->user_id = Auth::id();
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


	public function showLogin()
	{
		if(Auth::check()){
			return Redirect::action('WorkoutController@index');
		}else{
			return View::make('workouts.login');
		}
	}
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/workout');
		} else {
			Session::flash('errorMessage', 'Email and password combination failed');
			Log::info('validator failed', Input::all());
			return Redirect::action("WorkoutController@showLogin");
		    // display session flash error
		    // log email that tried to authenticate
		    // return Redirect::action('HomeController@showLogin');
		}
		
	}
	public function doLogout()
	{
		Auth::logout();
		//Session flash for logout
		return Redirect::to('/workout');
	}

}
