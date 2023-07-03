<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Process;
use App\Services\ProcessService;

class ProcessController extends Controller
{

    protected $processService;

    public function __construct(){
        $this->processService = new ProcessService();
    }

    public function index(Request $request){
        $process = $this->processService->getAll($request);
        return view('admin.process.index',compact('process'));
    }

    public function create(){
        return view('admin.process.create');
    }

    public function store(Request $request){
        $this->processService->store($request);
        return redirect()->route('process.index');
    }

    public function edit(string $id){
        $process = $this->processService->edit($id);
        return view('admin.process.edit',compact('process'));
    }



    public function update(Request $request, string $id){
        $process = $this->processService->update($request,$id);
        return redirect()->route('process.index',compact('process'));
    }

    public function destroy(string $id){
        $this->processService->destroy($id);
        return redirect()->route('process.index');
    }




}
