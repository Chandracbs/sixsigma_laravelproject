<?php

namespace App\Services;
use App\Models\Image;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Validation\Rule;

class TechService{

        private $imageService;

        public function __construct(){
            $this->imageService = new ImageService();
        }

        public function getAll(Request $request){
            $search = $request->search??"";
            $orderBy = $request->query('orderBy', 'name');
            $direction = $request->query('direction', 'asc');
            $technology = Technology::with('image');

            if($search!=""){
                $technology->where('name', 'LIKE', '%'.$search.'%');
            }
            $technology->orderBy($orderBy, $direction);
            return $technology->get();
        }

        public function edit(string $id){
            return Technology::findOrFail($id);
        }

        public function store(Request $request){
            $validatedValue = $request->validate([
                'name'=>'required|max:50',
                'ordering'=>'required|numeric|max:100|unique:technologies,ordering',
                'image'=>'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048'
            ]);

            $model = Technology::create($validatedValue);
            $this->imageService->store($model,$request->image,'images/technologies',true,90,90);

        }


        public function update(Request $request, string $id){

            $validatedValue = $request->validate([
                'name'=>'required|max:50',
                'ordering'=>['required', 'numeric', 'max:100', Rule::unique('technologies', 'ordering')->ignore($id)],
                'image'=>'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
            ]);

            $model = Technology::findOrFail($id);
            $model->update($validatedValue);

            $this->imageService->update($model,$request->image,'images/technology',true,90,90);
            return $model;

        }


        public function destroy($id){
            $model = Technology::findOrFail($id);
            $this->imageService->destroy($model);
            return redirect()->route('technology.index');

        }

}

?>
