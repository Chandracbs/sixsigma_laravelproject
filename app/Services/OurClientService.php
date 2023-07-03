<?php

namespace App\Services;
use App\Models\Image;
use App\Models\OurClient;
use Illuminate\Http\Request;
use App\Services\ImageService;

class OurClientService{

    protected $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $ourclient = OurClient::with('image');

        if($search!=""){
            $ourclient->where('name','LIKE','%'.$search.'%');
        }
        $ourclient->orderBy($orderBy,$direction);
        return $ourclient->get();
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'name'=>'required|max:50',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
        $model = OurClient::create($validatedValue);
        $this->imageService->store($model,$request->image,"images/ourclients",true,263,116);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'name'=>'required|max:50',
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
        $model = OurClient::findOrFail($id);
        $model->update($validatedValue);

        $this->imageService->update($model,$request->image,"images/ourclients",true,263,116);
        return $model;
    }

    public function edit(string $id){
        return OurClient::findOrFail($id);
    }

    public function destroy(string $id){
        $model = OurClient::findOrFail($id);
        $this->imageService->destroy($model);

    }


}

?>
