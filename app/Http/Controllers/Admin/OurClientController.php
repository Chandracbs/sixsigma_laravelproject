<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\OurClient;
use App\Services\OurClientService;

class OurClientController extends Controller
{

    protected $ourClientService;

    public function __construct(){
        $this->ourClientService = new OurClientService();
    }

    public function index(Request $request){
        $ourclient = $this->ourClientService->getAll($request);
        return view('admin.ourclient.index',compact('ourclient'));
    }

    public function create(){
        return view('admin.ourclient.create');
    }

    public function store(Request $request){
        $this->ourClientService->store($request);
        return redirect()->route('ourclient.index')->with('message','Client added Successfully');
    }

    public function edit(string $id){
        $ourclient = $this->ourClientService->edit($id);
        return view('admin.ourclient.edit',compact('ourclient'));
    }

    public function update(Request $request, string $id){
        $this->ourClientService->update($request,$id);
        return redirect()->route('ourclient.index')->with('message','Client updated Successfully');
    }

    public function destroy(string $id){
        $this->ourClientService->destroy($id);
        return redirect()->route('ourclient.index')->with('message','Client deleted Successfully');
    }



}
