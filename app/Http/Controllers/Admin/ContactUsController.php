<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ContactUsService;

class ContactUsController extends Controller
{

    protected $contactUsService;

    public function __construct(){
        $this->contactUsService = new ContactUsService();
    }

    public function index(Request $request){
        $contactus = $this->contactUsService->getAll($request);
        return view('admin.contactus.index',compact('contactus'));
    }

    public function create(){
        return view('admin.contactus.create');
    }

    public function store(Request $request){
        $this->contactUsService->store($request);
        return redirect()->route('contactus.index')->with('message','Contact added Successfully');
    }

    public function edit(string $id){
        $contactus = $this->contactUsService->edit($id);
        return view('admin.contactus.edit',compact('contactus'));
    }

    public function update(Request $request, string $id){
        $this->contactUsService->update($request,$id);
        return redirect()->route('contactus.index')->with('message','Contact deleted Successfully');

    }

    public function destroy(string $id){
        $this->contactUsService->destroy($id);
        return redirect()->route('contactus.index')->with('message','Contact deleted Successfully');
    }

}
