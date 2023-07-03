<?php

namespace App\Services;
use App\Models\Image;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class WhatService{
    private $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $whatwedo = WhatWeDo::with('image');

        if($search!=""){
            $whatwedo->where('name','LIKE','%'.$search.'%');
        }
        $whatwedo->orderBy($orderBy,$direction);
        return $whatwedo->get();
    }

    public function edit(string $id){
        $whatwedo = WhatWeDo::findOrFail($id);
        return $whatwedo;
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'name' => 'required|max:50',
            'ordering'=>'required|numeric|max:100|unique:what_we_dos,ordering',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);

        $model = WhatWeDo::create($validatedValue);
        $this->imageService->store($model,$request->image,'images/whatwedo',true,90,90);
    }

    public function update(Request $request,string $id){
        $validatedValue = $request->validate([
            'name' => 'required|max:50',
            'ordering'=>['required', 'numeric', 'max:100', Rule::unique('what_we_dos', 'ordering')->ignore($id)],
            'description'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
        $model = WhatWeDo::findOrFail($id);
        $model->update($validatedValue);

        $this->imageService->update($model,$request->image,"images/whatservice",true,90,90);
        return $model;

    }


    public function destroy(string $id){

        $model = WhatWeDo::findOrFail($id);
        $this->imageService->destroy($model);
        return redirect()->route('whatwedo.index');

    }

}

?>
