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
use Illuminate\Support\Facades\Validator;
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
        $jobopening = JobOpening::orderBy('created_at','desc')->get();
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
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:100',
            'phone'=>'required|max:15|min:7|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required|email|max:255',
            'message'=>'required',
            'interest'=>'required|max:50'
        ],[
            'phone.regex'=>'Please do not enter special characters',
            'interest.required'=>'Please select your interest'
        ]);

        if($validator->fails()){
            return back()->withFragment('#validateform')->withErrors($validator)->withInput();
        }
        else{
        ContactUs::create($request->all());
        return back()->withFragment('#contactform')->with('message','Your message has been sent successfully.');
        }
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

        $contactMail = new ContactUsMail($validatedValue);

        $contactMail->from($request->email, $request->name);

        Mail::to('info@sixsigmainc.com.np')->send($contactMail);

        return back()->withFragment('#contactform')->with('message','Your message has been sent successfully.');

    }

    public function consultation(Request $request){

        $validator = Validator::make($request->all(),[
            'c_name'=>'required|max:150',
            'company_name'=>'required|max:150',
            'c_email'=>'required|max:255|email',
            'c_contact'=>'required|max:15|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'c_message'=>'required'
        ],[
            'c_email.email'=>'The email field must be a valid email address.',
            'c_contact.numeric'=>'The contact field must be a number',
            'c_contact.max'=>'The contact field should be under 15 digits',
            'c_contact.min'=>'The contact field should be above 7 digits',
            'c_contact.regex'=>'The contact field must contain correction'

        ]);
        if($validator->fails()){
            return back()->withFragment('#validateconsultationform')->withErrors($validator)->withInput();
        }
        else{

            $consultantMail = new ConsultationMail($request->all());

            $consultantMail->from($request->c_email, $request->c_name);

            Mail::to('info@sixsigmainc.com.np')->send($consultantMail);

            return back()->withFragment('#consultationform')->with('message','Your message has been sent successfully.');
        }
    }

    public function location(){
        return redirect()->route('contact');
    }
}
