<?php

namespace App\Models;

use CodeIgniter\Model;

class DemoModel extends Model
{
    protected $table      = 'uts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','major','class','status','email'];

    public function getDemo($name = false)
    {
        if($name == false)
        {
            return $this->findAll();
        }

        return $this->where(['name' => $name])->first();
    }

    /*
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */
}