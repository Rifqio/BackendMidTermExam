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
        //$demo = $this->demoModel ->findAll();
        
        $data = [
            'title' => 'Demo Test',
            'demo' => $this->demoModel->getDemo()
        ];
    
        return view('pages/demo',$data);
    }
    public function details($name)
    {
        $data = [
            'title' => 'User Details',
            'demo'=> $this->demoModel->getDemo($name)
        ];
        return view('pages/details',$data);
    }

    public function create()
    {
        session();
        helper(['form', 'url']);
        $data = [
            'title' => 'Add Data',
            'validation' => \Config\Services::validation()
        ];

        return view ('pages/create',$data);
    }

    public function save()
    {
        // Validator
        if(!$this->validate([
            'name' => 'required|is_unique[uts.name]',
            'email' => 'required',
            'status' => 'required'
        ])){
            $alertVal = \Config\Services::validation();
            return redirect()->to('/demo/create')->withInput()->with('validation',$alertVal);
        }

        $this->demoModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'class' => $this->request->getVar('class'),
            'major' => $this->request->getVar('major'),
            'status' => $this->request->getVar('status'),
        ]);


        return redirect()->to('/demo');
        
    }

    public function delete($id)
    {
        $this->demoModel->delete($id);
        return redirect()->to('/demo');
    }

    public function edit($id = null)
    {
        $demoModel = new DemoModel();
        session();
        helper(['form', 'url']);
        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            //'name' => $this->demoModel->getDemo($id)
            //'name' => $this->demoModel->where('id',$this->request->getVar('id'))
            'demo' => $demoModel->where('id', $id)->first()

        ];

        return view ('pages/edit',$data);
    }

    public function update($id)
    {
        $this->demoModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'class' => $this->request->getVar('class'),
            'major' => $this->request->getVar('major'),
            'status' => $this->request->getVar('status'),
        ]);


        return redirect()->to('/demo');
    }
    
}
