<?php

namespace App\Services;
use App\Models\Image;
use App\Models\Process;
use Illuminate\Http\Request;
use App\Services\imageService;
use Illuminate\Validation\Rule;

class ProcessService{

    private $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $process = Process::with('image');

        if($search!=""){
            $process->where('name','LIKE','%'.$search.'%');
        }
        $process->orderBy($orderBy,$direction);
        return $process->get();
    }

    public function edit(string $id){
        $process = Process::findOrFail($id);
        return $process;
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'name' =>'required|max:50',
            'ordering'=>'required|numeric|max:100|unique:processes,ordering',
            'image'=>'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);

        $model = Process::create($validatedValue);
        $this->imageService->store($model,$request->image,'images/processes',true,70,70);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'name' =>'required|max:50',
            'ordering'=>['required','numeric','max:100',Rule::unique('processes','ordering')->ignore($id)],
            'image'=>'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);

        $model = Process::findOrFail($id);
        $model->update($validatedValue);

        $this->imageService->update($model,$request->image,"images/processes",true,70,70);
        return $model;

    }


    public function destroy(string $id){
        $model = Process::findOrFail($id);
        $this->imageService->destroy($model);
        return redirect()->route('process.index');
    }

}

?>
