<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $role;

    public function __construct(Role $role){
        $this->role = $role;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $role = $this->role->createRole($request->all());
        return response()->json($role);    
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request){
        try {
            $role = $this->role->updateRole($id,$request->all());
            return response()->json($role);
        }catch (ModelNotFoundException $exception){
            return response()->json(["msg"=>$exception->getMessage()],404);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id){
        $role = $this->role->getRole($id);
        if($role){
            return response()->json($role);
        }
        return response()->json(["msg"=>"Role item not found"],404);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function gets(){
        $roles = $this->role->getsRole();
        return response()->json($roles);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id){
        try {
            $role = $this->role->deleteRole($id);
            return response()->json(["msg"=>"delete role success"]);
        }catch (ModelNotFoundException $exception){
            return response()->json(["msg"=>$exception->getMessage()],404);
        }
    }
}
