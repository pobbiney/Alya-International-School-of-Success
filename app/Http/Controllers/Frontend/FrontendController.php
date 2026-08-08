<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Resource;
use App\Models\Staff;
use App\Models\Testimonial;
use App\Models\UserfulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class FrontendController extends Controller
{
    
 public function gethomeView()
 {
    return view('frontend.home');
 }

 public function getaboutView()
 {
    return view('frontend.about');
 }
    
}
