<?php

namespace App\Http\Controllers\Appoint;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Model\Relation;
use App\Model\Appoint;

class AppointController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Appointment Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles validating user's  request for appointment and
    | redirecting them to your home screen once request is sent.
    |
    */
	public function index()
	{
		return redirect()->route('home');
	}

	//validates and sends request
    public function requestAppoint(Request $request)
    {
        //checks whether the request is valid
		$this->validate($request,[
			'relation_id'=>'required|numeric',
		]);
    	$input =  $request->all();
		$rel = Relation::find($input['relation_id'])->first();
		if (!$rel) {
			return "invalid request";
		}
		$input['patient_id'] = $this->user->user_id;

        //sends request and notifies user, else shows error message
		if (Appoint::create($input)) {
			$request->session()->flash('message','Request send.');
			return redirect()->route('search.hospital.branch',[$rel->hos_id,$rel->branch_id]);
		}else{
			$request->session()->flash('message','Request send failed.');
			return redirect()->route('search.hospital.branch',[$rel->hos_id,$rel->branch_id]);
		}
    }
}
