<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Event;
// use App\Models\Registration; 

class AuthenController extends Controller
{ 
    public function registration()
    {
        return view('auth.registration');
    }
    public function registerUser(Request $request)
    {
        $request->validate([ 
            'username'=>'required|min:6|max:32|unique:users,Username',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new User(); 
        $user->Username = $request->username;
        $user->Password = $request->password;
        $user->Role  = 2;
        $result = $user->save();
        if($result){
            return back()->with('success','You have registered successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    } 

    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([            
            'username'=>'required|min:6|max:32',
            'password'=>'required|min:8|max:12'
        ]);

        $user = User::where('Username','=',$request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->Password)){
                $request->session()->put('loginId', $user->UserID);
                $request->session()->put('Username', $user->Username);
                $request->session()->put('Role', $user->Role);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail','Password not match!');
            }
        } else {
            return back()->with('fail','This username is not register.');
        }        
    }
    
    public function dashboard()
    { 
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('UserID','=',Session::get('loginId'))->first();
        }
        $events =  Event::with('registrations')->orderBy("created_at","desc")->get();
        return view('admin.dashboard',compact('data','events'));
    }
    public function dashboardEvents()
    { 
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('UserID','=',Session::get('loginId'))->first();
        }
        $events =  Event::with('registrations')->orderBy("created_at","desc")->get();
        return view('admin.events',compact('data','events'));
    }
    public function members()
    { 
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('UserID','=',Session::get('loginId'))->first();
        }
        // $events =  Event::with('registrations')->orderBy("created_at","desc")->get();
        $members = User::with('events')->where("Role",2)->orderBy("created_at","desc")->get();
        return view('admin.member',compact('data','members'));
    }
    
    
    public function createEvent(Request $request){
        $request->validate([            
            'e_eventName' => 'required|min:6|max:100',
            'e_description' => 'required|min:6|max:250',
            'e_date' => 'required|date',
            'e_time' => 'required|date_format:H:i',
            'e_location' => 'required|min:6|max:100',
        ]); 
        $event              = new Event(); 
        $event->EventName   = $request->e_eventName;
        $event->Description = $request->e_description;
        $event->Date        = $request->e_date;
        $event->Time        = $request->e_time;
        $event->Location    = $request->e_location;
        $result = $event->save();
        if($result){
            return back()->with('success','You have added evnet successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }

    }
    public function eventDetail(Request $request){
        $EventID = $request->get('id');
        if(Session::has('loginId')){
            $data = User::where('UserID','=',Session::get('loginId'))->first();
        }
        $event =  Event::with('users')->where("EventID",$EventID)->get();
        return view("admin.eventDetail",compact("data","event"));
    }
    public function editEvent(Request $request){
        
        $EventID = $request->get('id');
        if(Session::has('loginId')){
            $data = User::where('UserID','=',Session::get('loginId'))->first();
        }
        $event =  Event::with('users')->where("EventID",$EventID)->get();
        return view("admin.editEvent",compact("data","event"));    
    }

    // updateEvent
    public function updateEvent(Request $request){
         
        $request->validate([            
            'e_id' => 'required',
            'e_eventName' => 'required|min:6|max:100',
            'e_description' => 'required|min:6|max:250',
            'e_date' => 'required|date',
            'e_time' => 'required',
            'e_location' => 'required|min:6|max:100',
        ]); 
  
        $event              = Event::findOrFail($request->e_id); 
        $event->EventName   = $request->e_eventName;
        $event->Description = $request->e_description;
        $event->Date        = $request->e_date;
        $event->Time        = $request->e_time;
        $event->Location    = $request->e_location;
        $result = $event->save();
 
        if($result){ 
            return back()->with('success','You have update event successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }

    }
    public function deleteEvent(Request $request){
        $EventID = $request->get('id');
        $Event = Event::findOrFail($request->id);
        if($Event->EventID == ""){
            return back()->with('error','');
        }else{
            $deleted = Event::where('EventID', $EventID)->delete();
            if($deleted){
                return back()->with('success','You have delete event successfully. ');
            }else{
                return back()->with('fail','Something wrong!');
            }
        }
    }
    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull('Role');
            return redirect('/');
        }
    }
}