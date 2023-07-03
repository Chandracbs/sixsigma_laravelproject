<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Solution;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Validation\Rule;

class SolutionService
{

    private $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request)
    {
        $search = $request->search??"";
        $orderBy = $request->query('orderBy', 'name');
        $direction = $request->query('direction', 'asc');
        $solutions = Solution::with('image');

        if($search!=""){
            $solutions->where('name', 'LIKE', '%'.$search.'%');
        }
        $solutions->orderBy($orderBy, $direction);
        return $solutions->get();
    }

    public function edit(string $id){
        return Solution::findOrFail($id);
    }


    public function store(Request $request)
    {
        $validatedValue = $request->validate([
            'name' => 'required|max:50',
            'ordering' => 'required|numeric|max:100|unique:solutions,ordering',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg,gif|max:2048'
        ]);
        $model = Solution::create($validatedValue);
        $this->imageService->store($model,$request->image,'images/solutions',true,50,50);

    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'name'=>'required|max:50',
            'ordering'=>['required', 'numeric', 'max:100', Rule::unique('solutions', 'ordering')->ignore($id)],
            'description'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,svg,gif|max:2048'
        ]);
        $model = Solution::findOrFail($id);
        $model->update($validatedValue);
        $this->imageService->update($model,$request->image,"images/solutions",true,50,50);
        return $model;
    }


    public function destroy(string $id){
        $model = Solution::findOrFail($id);
        $this->imageService->destroy($model);
    }

}
?>


