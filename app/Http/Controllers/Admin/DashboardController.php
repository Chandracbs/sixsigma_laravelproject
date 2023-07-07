<?php

namespace App\Http\Controllers\Admin;

use App\Models\FAQ;
use App\Models\ContactUs;
use App\Models\OurClient;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $ourclientCount = OurClient::count();
        $testimonialsCount = Testimonial::count();
        $faqsCount = FAQ::count();
        $presenterCount = ContactUs::count();
        return view('admin.dashboard.index',compact('ourclientCount','testimonialsCount','faqsCount','presenterCount'));
    }
}

?>




