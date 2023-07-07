<?php

namespace App\Services;
use App\Models\Image;
use App\Models\MeetOurTeam;
use Illuminate\Http\Request;
use App\Services\ImageService;

class MeetOurTeamService{

    protected $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $meetourteam = MeetOurTeam::with('image');

        if($search!=""){
            $meetourteam->where('name','LIKE','%'.$search.'%');
        }
        $meetourteam->orderBy($orderBy,$direction);
        return $meetourteam->get();
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg,svg,gif',
            'name'=>'required|max:100',
            'position_name'=>'required|max:50',
            'description'=>'required'
        ]);

        $model = MeetOurTeam::create($validatedValue);
        $this->imageService->store($model,$request->image,"images/meetourteam",true,360,353);

    }

    public function edit(string $id){
        return MeetOurTeam::findOrFail($id);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'name'=>'required|max:100',
            'position_name'=>'required|max:50',
            'image'=>'image|mimes:png,jpg,jpeg,svg,gif',
            'description'=>'required'

        ]);

        $model = MeetOurTeam::findOrFail($id);
        $model->update($validatedValue);
        $this->imageService->update($model,$request->image,"images/meetourteam",true,360,353);
    }

    public function destroy(string $id){
        $model = MeetOurTeam::findOrFail($id);
        $this->imageService->destroy($model);
    }

}



?>
