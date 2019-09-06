<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exposition;
use App\JudgementClasses;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegistrationsController extends Controller {

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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        return "<pre>" . $request->all() . "</pre>";
		return "create";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $beside = $request->get('acotede');
        $nbcage = $request->get('nbcage');
        $cats =   $request->get('cats');
        return view('registrations.show', [ 'req'    =>$request,
                                            'beside' => $beside,
                                            'nbcage' => $nbcage,
                                            'cats'   => $cats,
                                            ]);
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('registrations.show', [ 'expo' => $expo,
                                            'cats' => $cats,
                                            'classes' => JudgementClasses::all(),
                                                 ]);
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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


	/**
	 * Registrer to an exposition.
	 *
	 * @param  int  $exposition_id
	 * @return Response
	 */
	public function register($expo_id)
	{
        $expo = Exposition::findOrFail($expo_id);
        $cats = Auth::user()->cats;
        return view('registrations.register', [ 'expo' => $expo,
                                                'cats' => $cats,
                                                'classes' => JudgementClasses::all(),
                                                 ]);
	}


}
