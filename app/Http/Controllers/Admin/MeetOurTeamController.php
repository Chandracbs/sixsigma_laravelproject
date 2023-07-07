<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MeetOurTeamService;

class MeetOurTeamController extends Controller
{
    protected $meetOurTeamService;

    public function __construct(){
        $this->meetOurTeamService = new MeetOurTeamService();
    }

    public function index(Request $request){
        $meetourteam = $this->meetOurTeamService->getAll($request);
        return view('admin.meetourteam.index',compact('meetourteam'));
    }

    public function create(){
        return view('admin.meetourteam.create');
    }

    public function store(Request $request){
        $this->meetOurTeamService->store($request);
        return redirect()->route('meetourteam.index')->with('message','Team added Successfully');
    }

    public function edit(string $id){
        $meetourteam = $this->meetOurTeamService->edit($id);
        return view('admin.meetourteam.edit',compact('meetourteam'));
    }

    public function update(Request $request, string $id){
        $this->meetOurTeamService->update($request,$id);
        return redirect()->route('meetourteam.index')->with('message','Team updated Successfully');
    }

    public function destroy(string $id){
        $this->meetOurTeamService->destroy($id);
        return redirect()->route('meetourteam.index')->with('message','Team deleted Successfully');
    }

}
