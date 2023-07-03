<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobOpening;
use App\Services\JobOpeningService;

class JobOpeningController extends Controller
{

    protected $jobOpeningService;

    public function __construct(){
        $this->jobOpeningService = new JobOpeningService();
    }

    public function index(Request $request){
        $jobopening = $this->jobOpeningService->getAll($request);
        return view('admin.jobopening.index',compact('jobopening'));
    }

    public function create(){
        return view('admin.jobopening.create');
    }

    public function edit(string $id){
        $jobopening = $this->jobOpeningService->edit($id);
        return view('admin.jobopening.edit',compact('jobopening'));
    }

    public function store(Request $request){
        $this->jobOpeningService->store($request);
        return redirect()->route('jobopening.index');
    }

    public function update(Request $request, string $id){
        $this->jobOpeningService->update($request,$id);
        return redirect()->route('jobopening.index');
    }

    public function destroy(string $id){
        $this->jobOpeningService->destroy($id);
        return redirect()->route('jobopening.index');

    }


}
