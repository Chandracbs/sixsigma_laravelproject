<?php

namespace App\Services;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningService{

    private $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','position_name');
        $direction = $request->query('direction','asc');
        $jobopening = JobOpening::query();

        if($search!=""){
            $jobopening->where('position_name','LIKE','%'.$search.'%');
        }
        $jobopening->orderBy($orderBy,$direction);
        return $jobopening->get();
    }

    public function edit(string $id){
        return JobOpening::findOrFail($id);

    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'position_name'=>'required|max:50',
            'vacancy_no'=>'required|numeric|max:1000',
            'image'=>'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048'
        ]);
        $model = JobOpening::create($validatedValue);
        $this->imageService->store($model, $request->image, 'images/jobopenings',true,360,353);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'position_name'=>'required|max:50',
            'vacancy_no'=>'required|numeric|max:1000',
            'image'=>'image|mimes:png,jpg,jpeg,svg,gif|max:2048'
        ]);
        $model = JobOpening::findOrFail($id);
        $model->update($validatedValue);
        $this->imageService->update($model,$request->image,'images/jobopenings',true,360,353);
    }



    public function destroy(string $id){
        $model = JobOpening::findOrFail($id);
        $this->imageService->destroy($model);
    }

}


?>
