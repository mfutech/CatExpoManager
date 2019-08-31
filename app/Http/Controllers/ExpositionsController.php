<?php namespace App\Http\Controllers;

use App\Registration;
use Input;
use Redirect;
use Auth;
use App\Exposition;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExpositionsController extends Controller {

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
		$regexpos = Auth::user()->registrations()->get()->map(
			function($r) { return $r->exposition_id; })->toArray();
		$expos = Exposition::all();
		return view('expositions.index', compact('expos', 'regexpos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('expositions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		Exposition::create( $input );
		return Redirect::route('expositions.index')->with('message', 'Exposition créée');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Exposition $expo
	 * @return Response
	 */
	public function show($id)
	{
		$expo = Exposition::find($id);
		if (! $expo) abort(404);
		return view('expositions.show', compact('expo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Exposition $expo
	 * @return Response
	 */
	public function edit($id)
	{
		$expo = Exposition::find($id);
		if ( ! $expo) abort (404);
		return view('expositions.edit', compact('expo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Exposition $expo
	 * @return Response
	 */
	public function update($id)
	{
		$expo = Exposition::find($id);
		if (! $expo) abort(404);
		$input = array_except(Input::all(), '_method');
		$expo->update($input);
		return Redirect::route('expositions.show', $expo->id)->with('message', 'Exposition validée.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Exposition $expo
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::route('expositions.index')->with('message', 'Opération non supportée.');
		//$expo->delete();
		//return Redirect::route('expositions.index')->with('message', 'Exposition effacée.');
	}

}
