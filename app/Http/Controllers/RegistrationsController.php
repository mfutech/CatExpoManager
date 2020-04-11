<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// need authentication & requets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Exposition;
use App\JudgementClasses;
use App\Registration;
use App\CatRegistration;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;




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
        abort(403, 'not implemented');   
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $expo_id = $request->get('expo_id');
        $expo = Exposition::findOrFail($expo_id);
        $user_id = Auth::user()->id;
        $reg = Registration::where('user_id', $user_id)->where('exposition_id', $expo_id)->first();
        if ($reg == null) {
            $reg = new Registration();
            $reg->user_id = $user_id;
            $reg->exposition_id = $expo_id;
        }
        $reg->beside  = $request->get('acotede');
        $reg->cage_quantity = $request->get('nbcage');
        $reg -> save();
        $cats = $request->get('cats');
        $classes = $request->get('classes');
        $classes_sunday = $request->get('classes_sunday');
        for ($i = 0; $i < sizeof($cats); $i++) {
            $cat_reg = CatRegistration::where('registration_id', $reg->id)->where('cat_id', $cats[$i])->first();
            if ($cat_reg == null){
                $cat_reg = new CatRegistration();
                $cat_reg->registration_id = $reg->id;
                $cat_reg->cat_id = $cats[$i];
            }
            $cat_reg->category_day1 = $classes[$i];
            $cat_reg->category_day2 = $classes_sunday[$i];
            $cat_reg->save();
        }

        Mail::to(
            Auth::user()->email
        )->send(
            new RegistrationConfirmation(
                $reg, $expo, $reg->cat_registration()->get()
            )
        );


        return view('registrations.show', [ 'req'   => $request,
                                            'reg'   => $reg,
                                            'expo'  => $expo,    
                                            'cat_regs'  => $reg->cat_registration()->get(),
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
        $reg = Registration::findOrFail($id);
        return view('registrations.show', [ 'expo' => $reg->exposition()->first(),
                                            'cats' => $reg->cat_registration()->get(),
                                            'reg'  => $reg,
                                            'cat_regs'  => $reg->cat_registration()->get(),
                                            'req'  => '',
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
