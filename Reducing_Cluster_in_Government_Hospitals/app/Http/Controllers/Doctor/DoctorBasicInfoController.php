<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\MyServices\DocBasicInfoService;
use App\Http\Requests\DocBasicInfoRequest;
class DoctorBasicInfoController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | DoctorBasicInfo Controller
    |--------------------------------------------------------------------------
    |
    | This controller modifies the Doctor Basic Information Table according to user command
    |
    */
    protected $docBasicInfo;
    public function __construct(DocBasicInfoService $docInfo)
    {
        parent::__construct();
        $this->docBasicInfo = $docInfo;
    }
    public function index()
    {
        return $this->docBasicInfo->getDocBasicInfo($this->user);
    }



    public function store(DocBasicInfoRequest $request)
    {
        // checking data exit or not
        $docInfo = $this->user->docBasicInfo;

        if(!$docInfo){
            //create
            return $this->docBasicInfo->insertDocInfo($this->user,$request);
        }else{
            // update
            return $this->docBasicInfo->updateDocInfo($this->user,$request,$docInfo);
        }
    }



    public function edit()
    {
        return $this->docBasicInfo->editDocBasicInfo($this->user);
    }


}
