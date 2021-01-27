<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function profile(){
        return view('backend.users.admin.profile');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function cart(){
        return view('frontend.cart');
    }
}
