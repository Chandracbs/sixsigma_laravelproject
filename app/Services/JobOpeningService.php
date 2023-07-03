<?php

namespace App\Services;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningService{

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
            'description'=>'required'
        ]);
        $jobopening = JobOpening::create($validatedValue);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'position_name'=>'required|max:50',
            'vacancy_no'=>'required|numeric|max:1000',
            'description'=>'required'
        ]);
        $jobopening = JobOpening::findOrFail($id);
        $jobopening->update($validatedValue);
    }



    public function destroy(string $id){
        $jobopening = JobOpening::findOrFail($id);
        $jobopening->delete();
    }

}


?>
