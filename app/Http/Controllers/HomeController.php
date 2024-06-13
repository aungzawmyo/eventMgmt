<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use App\Models\Registration; 
use DB;
class HomeController extends Controller
{
    public function home(): View
    {
        $events =  Event::with('users')->orderBy("created_at","desc")->get();
        return view('home', ['eventList'=> $events]);
    }
    public function registerEvent(Request $request){

        if($request->get("id")!=""){
            $userid = Session::get("loginId");
            $EventID = $request->get("id");
            $registration = new Registration();
            $registration->UserID = $userid;
            $registration->EventID  = $EventID; 
            
            $result = $registration->save();
            if($result){
                return back()->with('success','Your registration successfully.');
            } else {
                return back()->with('fail','Something wrong!');
            }
        }

    }
    public function upcomingEvent() {

        // $userid = Session::get("loginId"); 
        // $registration = Registration::with("event")->where("UserID", $userid)->get();
        $events =  Event::with('users')->orderBy("created_at","desc")->get();
        return view('upcoming-event', ['eventList'=> $events]);
        
    }
    public function aboutUs()  {
        return view('about-us');
        
    }
}
