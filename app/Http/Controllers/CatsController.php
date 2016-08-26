<?php namespace App\Http\Controllers;

use Auth;
use Input;
use Redirect;
use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller {

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
		$cats = Cat::usersCats()->get();
		return view('cats.index', compact('cats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cat = new Cat;
		return view('cats.create', compact('cat'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array_except(Input::all(), ['_method', '_token']);
		$cat = Cat::create( $input );
		$cat->owner()->associate(Auth::user());
		$cat->save();
		return Redirect::route('cats.index')->with('message', 'Chat ajouté');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Cat $cat)
	{
		return view('cats.show', compact('cat'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Cat $cat)
	{
		return view('cats.edit', compact('cat'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Cat $cat)
	{
		if($cat->user_id == Auth::user()->id) {
			$input = array_except(Input::all(), ['_method', '_token', 'user_id']);
			$cat->update($input);
			$mesg = 'Donn�e valid�e.';

		}
		else {
			$mesg = 'Modification interdite';
		}

		return Redirect::route('cats.show', $cat)->with('message', $mesg);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return Redirect::route('cats.index')->with('message', 'Op�ration non support�e.');
        //$expo->delete();
        //return Redirect::route('cats.index')->with('message', 'Donn�es effac�e.');
	}

}
