<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $company;

    public function __construct(Company $company){
        $this->company = $company;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $company = $this->company->createCompany($request->all());
        return response()->json($company);    
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request){
        try {
            $company = $this->company->updateCompany($id,$request->all());
            return response()->json($company);
        }catch (ModelNotFoundException $exception){
            return response()->json(["msg"=>$exception->getMessage()],404);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id){
        $company = $this->company->getCompany($id);
        if($company){
            return response()->json($company);
        }
        return response()->json(["msg"=>"Company item not found"],404);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function gets(){
        $companys = $this->company->getsCompany();
        return response()->json($companys);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id){
        try {
            $company = $this->company->deleteCompany($id);
            return response()->json(["msg"=>"delete company success"]);
        }catch (ModelNotFoundException $exception){
            return response()->json(["msg"=>$exception->getMessage()],404);
        }
    }
}
