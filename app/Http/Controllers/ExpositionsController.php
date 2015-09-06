<?php namespace App\Http\Controllers;

use Input;
use Redirect;
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
		$expos = Exposition::all();
		return view('expositions.index', compact('expos'));
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
	public function store(Exposition $expo)
	{
		$input = Input::all();
		Exposition::create( $input );
		return Redirect::route('expositions.index')->with('message', 'Exposition créée');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Exposition $expo)
	{
		return view('expositions.show', compact('expo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Exposition $expo)
	{
		return view('expositions.edit', compact('expo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Exposition $expo)
	{
		$input = array_except(Input::all(), '_method');
		$expo->update($input);
		return Redirect::route('expositions.show', $expo->id)->with('message', 'Exposition validée.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Exposition $expo)
	{
		
		return Redirect::route('expositions.index')->with('message', 'Opération non supportée.');
		//$expo->delete();
		//return Redirect::route('expositions.index')->with('message', 'Exposition effacée.');

	}

}
