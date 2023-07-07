<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhatWeDo;
use App\Services\WhatService;

class WhatController extends Controller
{
    protected $whatService;

    public function __construct(){
        $this->whatService = new WhatService();
    }

    public function index(Request $request){
        $whatwedo = $this->whatService->getAll($request);
        return view('admin.whatwedo.index',compact('whatwedo'));
    }

    public function create(){
        return view('admin.whatwedo.create');
    }

    public function edit(string $id){
        $whatwedo = $this->whatService->edit($id);
        return view('admin.whatwedo.edit',compact('whatwedo'));
    }

    public function store(Request $request){
        $this->whatService->store($request);
        return redirect()->route('whatwedo.index')->with('message','Data added Successfully');
    }

    public function update(Request $request,string $id){
        $this->whatService->update($request,$id);
        return redirect()->route('whatwedo.index')->with('message','Data updated Successfully');
    }


    public function destroy(string $id){
        $this->whatService->destroy($id);
        return redirect()->route('whatwedo.index')->with('message','Data deleted Successfully');
    }
}
