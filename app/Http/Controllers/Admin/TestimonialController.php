<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Services\TestimonialService;

class TestimonialController extends Controller
{

    protected $testimonialService;

    public function __construct(){
        $this->testimonialService = new TestimonialService();
    }

    public function index(Request $request){
        $testimonial = $this->testimonialService->getAll($request);
        return view('admin.testimonial.index',compact('testimonial'));
    }

    public function create(){
        return view('admin.testimonial.create');
    }

    public function edit(string $id){
        $testimonial = $this->testimonialService->edit($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    public function store(Request $request){
        $this->testimonialService->store($request);
        return redirect()->route('testimonial.index');
    }

    public function update(Request $request, string $id){
        $this->testimonialService->update($request,$id);
        return redirect()->route('testimonial.index');
    }

    public function destroy(string $id){
        $this->testimonialService->destroy($id);
        return redirect()->route('testimonial.index');

    }


}
