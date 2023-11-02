<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Role extends Model
{
    use HasFactory;

    protected $table="roles";

    /**
     * @param array $attributes
     * @return role
     */
    public function createRole(array $attributes){
        $role = new self();
        $role->user_id = $attributes["user_id"];
        $role->company_id = $attributes["company_id"];
        $role->role = $attributes["role"];
        $role->save();
        return $role;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getRole(int $id){
        $role = $this->where("id",$id)->first();
        return $role;
    }

    /**
     * @return role[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getsRole(){
        $roles = $this::all();
        return $roles;
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function updateRole(int $id, array $attributes){
        $role = $this->getRole($id);
        if($role == null){
            throw new ModelNotFoundException("Cant find role");
        }
        $role->user_id = $attributes["user_id"];
        $role->company_id = $attributes["company_id"];
        $role->role = $attributes["role"];
        $role->save();
        return $role;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteRole(int $id){
        $role = $this->getRole($id);
        if($role == null){
            throw new ModelNotFoundException("role item not found");
        }
        return $role->delete();
    }
}
