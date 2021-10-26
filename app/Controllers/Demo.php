<?php

namespace App\Controllers;

use App\Models\DemoModel;


class Demo extends BaseController
{
    protected $demoModel;
    public function __construct()
    {
        $this->demoModel = new DemoModel();
    }

    public function index()
    {
        $demo = $this->demoModel ->findAll();
        
        $data = [
            'title' => 'Demo Test',
            'demo' => $demo
        ];
    
        return view('pages/demo',$data);
    }

    public function create()
    {
        helper(['form', 'url']);
        $check = $this -> validate([
            'name' => 'required',
            'email' => 'required',
            'major' => 'required',
        ]);
        $data = [
            'title' => 'Add Data',
        ];

        return view ('pages/create',$data);
    }
    
}
