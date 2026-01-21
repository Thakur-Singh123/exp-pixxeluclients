<?php
namespace App\Http\Controllers;

use App\Models\ExServiceMan;
use App\Models\LatestNews;
use App\Models\VeerNari;
use App\Models\Widow;

class FrontController extends Controller
{
    //Function for welcome page
    public function welcome() {
        //Get latest news
        $latestNews = LatestNews::orderBy('id', 'DESC')->take(10)->get();
        return view('fronts.welcome', compact('latestNews'));
    }

    //Function for next page
    public function next() {
        //Get services
        $all_services = ExServiceMan::with('children')->OrderBy('ID', 'DESC')->get();
        $all_widows   = Widow::with('serviceman_detail')->OrderBy('ID', 'DESC')->get();
        $all_veers    = VeerNari::with('serviceman_detail')->OrderBy('ID', 'DESC')->get();
        return view('fronts.next', compact('all_services', 'all_widows', 'all_veers'));
    }

    //Function for single service detail
    public function service_detail($id) {
        //Get service detail
        $service_detail = ExServiceMan::with('children')->find($id);
        //Check if service fond or not
        if (! $service_detail) {
            return response()->json(['status' => false, 'message' => 'Record not found']);
        }
        //Return full HTML (Blade render)
        $html = view('fronts.single-service', compact('service_detail'))->render();
        //Response
        return response()->json([
            'status' => true,
            'html'   => $html,
        ]);
    }

    //Function for single window detail
    public function window_detail($id) {
        //Get widow  detail
        $widow_detail = Widow::with('serviceman_detail')->find($id);
        //Check if service fond or not
        if (! $widow_detail) {
            return response()->json(['status' => false, 'message' => 'Record not found']);
        }
        //Return full HTML (Blade render)
        $html = view('fronts.single-widow', compact('widow_detail'))->render();
        //Response
        return response()->json([
            'status' => true,
            'html'   => $html,
        ]);
    }

    //Function for single veer nari detail
    public function veer_nari_detail($id) {
        //Get widow  detail
        $veer_detail = VeerNari::with('serviceman_detail')->find($id);
        //Check if service fond or not
        if (! $veer_detail) {
            return response()->json(['status' => false, 'message' => 'Record not found']);
        }
        //Return full HTML (Blade render)
        $html = view('fronts.single-veer-nari', compact('veer_detail'))->render();
        //Response
        return response()->json([
            'status' => true,
            'html'   => $html,
        ]);
    }

    //Function for about us
    public function about() {
        return view('fronts.about-us');
    }

    //Function for job
    public function jobs() {
        return view('fronts.forms');
    }

    //Function for outreach
    public function outreach() {
        return view('fronts.outreach');
    }

    //Function for military-funeral
    public function funeral() {
        return view('fronts.funeral');
    }

    //Function for ECHS
    public function echspage() {
        return view('fronts.echs-page');
    }

    //Function for canteen
    public function canteen() {
        return view('fronts.canteen');
    }

    //Function for bulletin
    public function awpo() {
        return view('fronts.awpo');
    }

    //Function for Baatcheet
    public function baatcheet() {
        return view('fronts.baatcheet');
    }
}
