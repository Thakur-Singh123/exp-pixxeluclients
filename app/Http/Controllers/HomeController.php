<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        //Get auth detail
        $user_detail = Auth::user();
        //Check if user type admin or not
        if ($user_detail->user_type == 'Admin') {
            return redirect('admin/services');
        //Check if user type Customer or not
        } elseif ($user_detail->user_type == 'Customer') {
            return redirect('customer/dashboard'); 
        } else {
            return view('home');
        }
    }
}
