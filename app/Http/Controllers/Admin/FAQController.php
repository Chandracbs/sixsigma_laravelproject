<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FAQService;

class FAQController extends Controller
{

    protected $faqService;

    public function __construct(){
        $this->faqService = new FAQService();
    }

    public function index(Request $request){
        $faq = $this->faqService->getAll($request);
        return view('admin.faq.index',compact('faq'));
    }

    public function create(){
        return view('admin.faq.create');
    }

    public function store(Request $request){
        $this->faqService->store($request);
        return redirect()->route('faq.index')->with('message','FAQ added Successfully');
    }

    public function edit(string $id){
        $faq = $this->faqService->edit($id);
        return view('admin.faq.edit',compact('faq'));
    }

    public function update(Request $request, string $id){
        $this->faqService->update($request,$id);
        return redirect()->route('faq.index')->with('message','FAQ updated Successfully');

    }

    public function destroy(string $id){
        $this->faqService->destroy($id);
        return redirect()->route('faq.index')->with('message','FAQ deleted Successfully');
    }

}
