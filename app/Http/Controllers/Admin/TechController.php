<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use App\Services\TechService;

class TechController extends Controller
{
    protected $techService;

    public function __construct(){
        $this->techService = new TechService();
    }

    public function index(Request $request){
            $technology = $this->techService->getAll($request);
        return view('admin.technology.index', compact('technology'));
    }
    public function create(){
        return view('admin.technology.create');
    }

    public function edit(string $id){
        $technology = $this->techService->edit($id);
        return view('admin.technology.edit',compact('technology'));
    }

    public function store(Request $request){
        $this->techService->store($request);
        return redirect()->route('technology.index');
    }

    public function update(Request $request, string $id){
        $this->techService->update($request,$id);
        return redirect()->route('technology.index');
    }

    public function destroy(string $id){
        $this->techService->destroy($id);
        return redirect()->route('technology.index');
    }

}
