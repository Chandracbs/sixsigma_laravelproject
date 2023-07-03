<?php

namespace App\Http\Controllers\Frontend;

use App\Models\FAQ;
use App\Models\Process;
use App\Models\Solution;
use App\Models\WhatWeDo;
use App\Models\ContactUs;
use App\Models\OurClient;
use App\Models\JobOpening;
use App\Models\Technology;
use App\Mail\ContactUsMail;
use App\Models\MeetOurTeam;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ConsultationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactUsController;

class IndexController extends Controller
{
    public function home(){
        $title = "Six Sigma Inc - Home";
        $solution = Solution::orderBy('ordering')->take(4)->get();
        $whatwedo = WhatWeDo::orderBy('ordering')->get();
        $process = Process::orderBy('ordering')->get();
        $technology = Technology::orderBy('ordering')->get();
        $ourclient = OurClient::all();
        $jobopening = JobOpening::orderBy('created_at','desc')->take(3)->get();
        return view('frontend.home',compact('whatwedo','process','technology','ourclient','jobopening','solution','title'));
    }
    public function about(){
        $title = "Six Sigma Inc - About";
        $meetourteam = MeetOurTeam::with('image')->get();
        $ourclient = OurClient::with('image')->get();
        return view('frontend.about',compact('meetourteam','ourclient','title'));
    }
    public function career(){
        $title = "Six Sigma Inc - Careers";
        $jobopening = JobOpening::all();
        return view('frontend.career',compact('jobopening','title'));
    }
    public function services(){
        $title = "Six Sigma Inc - Services";
        $whatwedo = WhatWeDo::orderBy('ordering')->get();
        $technology = Technology::orderBy('ordering')->get();
        $testimonial = Testimonial::all();
        $process = Process::orderBy('ordering')->get();
        return view('frontend.services',compact('whatwedo','technology','testimonial','process','title'));
    }
    public function contact(){
        $title = "Six Sigma Inc - Contact";
        return view('frontend.contact',compact('title'));
    }
    public function contact_store(Request $request){
        $validatedValue = $request->validate([
            'name'=>'required|max:100',
            'phone'=>'required|max:15|min:7|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required|email|unique:contact_us,email|max:255',
            'message'=>'required',
            'interest'=>'required|max:50'
        ],[
            'phone.regex'=>'Please do not enter special characters',
            'interest.required'=>'Please select your interest'
        ]);

        ContactUs::create($validatedValue);
        return redirect()->route('contact')->with('message','You have successfully sent a message.');
    }

    public function webdev(){
        $title = "Six Sigma Inc - Web Development";
        $faq = FAQ::all();
        return view('frontend.webdev',compact('faq','title'));
    }




    // For Mail
    public function contactus(Request $request){
        $validatedValue = $request->validate([
            'name'=>'required|max:150',
            'email'=>'required|max:255|email',
            'message'=>'required'
        ]);

        Mail::to('chandra20163@gmail.com')->send(new ContactUsMail($validatedValue));
        return back()->with('message','Your Contact has been sent successfully.');

    }

    public function consultation(Request $request){
        $validatedValue = $request->validate([
            'name'=>'required|max:150',
            'company_name'=>'required|max:150',
            'email'=>'required|max:255|email',
            'contact'=>'required|numeric',
            'message'=>'required'
        ]);
        Mail::to('chandra20163@gmail.com')->send(new ConsultationMail($validatedValue));
        return back()->with('message','Your Consultation has been sent successfully.');
    }

    public function location(){
        return redirect()->route('contact');
    }
}
