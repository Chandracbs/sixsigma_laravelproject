<?php

namespace App\Services;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQService{

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','question');
        $direction = $request->query('direction','asc');
        $faq = FAQ::query();

        if($search!=""){
            $faq->where('question','LIKE','%'.$search.'%');
        }
        $faq->orderBy($orderBy,$direction);
        return $faq->get();
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);

       return FAQ::create($validatedValue);
    }

    public function edit(string $id){
        return FAQ::findOrFail($id);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        $faq = FAQ::findOrFail($id);
        $faq->update($validatedValue);

    }

    public function destroy(string $id){
        $faq = FAQ::findOrFail($id);
        $faq->delete();
    }
}


?>
