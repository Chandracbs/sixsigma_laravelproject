<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Solution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SolutionService;
use App\Services\ImageService;


class SolutionController extends Controller
{
    protected $solutionService;

    public function __construct()
    {
        $this->solutionService = new SolutionService();
    }


    public function index(Request $request){
        $solution = $this->solutionService->getAll($request);
        return view('admin.solution.index',compact('solution'));
    }

    public function create(){
        return view('admin.solution.create');
    }

    public function edit(string $id){
        $solution = $this->solutionService->edit($id);
        return view('admin.solution.edit',compact('solution'));
    }

    public function store(Request $request){
        $this->solutionService->store($request);
        return redirect()->route('solution.index');
    }

    public function update(Request $request,string $id){
        $this->solutionService->update($request,$id);
        return redirect()->route('solution.index');
    }

    public function destroy(string $id){
        $this->solutionService->destroy($id);
        return redirect()->route('solution.index');
    }
}
?>



