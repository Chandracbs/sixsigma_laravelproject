<?php

namespace App\Services;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Services\ImageService;

class TestimonialService{

    private $imageService;

    public function __construct(){
        $this->imageService = new ImageService();
    }

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $testimonials = Testimonial::with('image');

        if($search!=""){
            $testimonials->where('name','LIKE','%'.$search.'%');
        }
        $testimonials->orderBy($orderBy,$direction);
        return $testimonials->get();
    }

    public function edit(string $id){
        return Testimonial::findOrFail($id);

    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'testimonials'=>'required',
            'name'=>'required|max:100',
            'position'=>'required|max:100'
        ]);
        $model = Testimonial::create($validatedValue);
        $this->imageService->store($model,$request->image,'images/testimonials',true,96,120);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'testimonials'=>'required',
            'name'=>'required|max:100',
            'position'=>'required|max:100'
        ]);
        $model = Testimonial::findOrFail($id);
        $model->update($validatedValue);

        $this->imageService->update($model,$request->image,'images/testimonials',true,96,120);
    }



    public function destroy(string $id){
        $model = Testimonial::findOrFail($id);
        $this->imageService->destroy($model);
    }

}


?>
