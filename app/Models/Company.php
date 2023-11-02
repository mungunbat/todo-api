<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Company extends Model
{
    use HasFactory;

    protected $table="company";

    /**
     * @param array $attributes
     * @return company
     */
    public function createCompany(array $attributes){
        $company = new self();
        $company->name = $attributes["name"];
        $company->save();
        return $company;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getCompany(int $id){
        $company = $this->where("id",$id)->first();
        return $company;
    }

    /**
     * @return company[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getsCompany(){
        $companys = $this::all();
        return $companys;
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function updateCompany(int $id, array $attributes){
        $company = $this->getCompany($id);
        if($company == null){
            throw new ModelNotFoundException("Cant find company");
        }
        $company->name = $attributes["name"];
        $company->save();
        return $company;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteCompany(int $id){
        $company = $this->getCompany($id);
        if($company == null){
            throw new ModelNotFoundException("company item not found");
        }
        return $company->delete();
    }
}
