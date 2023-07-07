<?php

namespace App\Services;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsService{

    public function getAll(Request $request){
        $search = $request->search??"";
        $orderBy = $request->query('orderBy','name');
        $direction = $request->query('direction','asc');
        $contactus = ContactUs::query();

        if($search!=""){
            $contactus->where('name','LIKE','%'.$search.'%');
        }
        $contactus->orderBy($orderBy,$direction);
        return $contactus->get();
    }

    public function store(Request $request){
        $validatedValue = $request->validate([
            'name'=>'required|max:100',
            'phone'=>'required|max:15|min:7|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required|email|max:255',
            'message'=>'required',
            'interest'=>'required|max:50'
        ],[
            'phone.regex'=>'Please do not enter special characters',
            'interest.required'=>'Please select your interest'
        ]);
       return ContactUs::create($validatedValue);
    }

    public function edit(string $id){
        return ContactUs::findOrFail($id);
    }

    public function update(Request $request, string $id){
        $validatedValue = $request->validate([
            'name'=>'required|max:100',
            'phone'=>'required|max:15|min:7|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required|email|max:255',
            'message'=>'required',
            'interest'=>'required|max:50'
        ],
        [
            'phone.regex'=>'Please do not enter special characters',
            'interest.required'=>'Please select your interest'
        ]);
        $contactus = ContactUs::findOrFail($id);
        return $contactus->update($validatedValue);

    }

    public function destroy(string $id){
        $contactus = ContactUs::findOrFail($id);
        $contactus->delete();
    }
}


?>
