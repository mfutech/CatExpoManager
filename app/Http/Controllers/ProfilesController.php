<?php namespace App\Http\Controllers;

use Auth;
use Input;
use Redirect;

use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

use App\User;

class ProfilesController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// requires authentication
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Auth::user();
		return view('profiles.show', compact('user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($user_id)
	{
        $user = User::findOrFail($user_id)->first();
		return view('profiles.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($user_id)
	{
        $user = User::findOrFail($user_id)->first();
        #$profile = $user;
        #return "<pre>" . var_dump($user) . "</pre><hr><pre>" . var_dump($user) . "</pre>";
		return view('profiles.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($user_id)
	{
        $user = User::findOrFail($user_id)->first();
		if($user->id == Auth::user()->id) {
			$input = Arr::except (Input::all(), ['_method', '_token', 'user_id']);
			$user->update($input);
			$mesg = 'Donnée validée.';

		}
		else {
			$mesg = 'Modification interdite';
		}
		return Redirect::route('profile.show', $user_id)->with('message', $mesg);	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
