<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kurs;
use App\Models\kursnone;
use App\Models\kupione;
use App\Models\error;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\QueryFilters\ActorFilters;



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
    public function home()
    {
        return view('home');
    }

    public function delete(Request $request)
    {
        $id = $request->id; 
       $delete = kursnone::destroy($id);
       return redirect()->route('acceptkursy');
    }
    
    public function dodaj()
    {
        return view('dodaj');
    }
   
    public function error()
    {
        return view('error');
    }
    public function kursy()
    {
        $kursy = kurs::all();
        
        return view('kursy', ['kursy' => $kursy]);
   }
   public function acceptkursy()
   {
       $kursy = kursnone::all();
       return view('acceptkursy', ['kursy' => $kursy]);
    }



   public function serror(Request $request)
    {
        $role = $request->get('role');
        if($role=='0')
        {
            return view('home');
        }
        $error = error::all();
        return view('serror', ['serror' => $error]);
   }
   public function saveerror(Request $request)
   {
        $send = new error();

        $send->creator = $request->creator;
        $send->category = $request->category;
        $send->error = $request->error;

        $send->save();
        return redirect()->route('serror');
   }
   
   public function save(Request $request)
   {
        $send = new Kurs();
        $id = $request->id; 

        $send->creator = $request->creator;
        $send->title = $request->title;
        $send->price = $request->price;
        $send->level = $request->level;
        $send->link = $request->link;
        

        $send->save();
        $delete = kursnone::destroy($id);
        return redirect()->route('kursy');
   }
   public function savenone(Request $request)
   {
        $send = new Kursnone();

        $send->creator = $request->creator;
        $send->title = $request->title;
        $send->price = $request->price;
        $send->level = $request->level;
        $send->link = $request->link;
        

        $send->save();
        return redirect()->route('acceptkursy');
   }
   public function buy(Request $request)
    {
        $userid = $request->get('id');

         $user = user::find($userid);

         $pieniadze=$user->money;
          $reszta=$pieniadze- $request->price;
        $user->money=$reszta;

         $user->save();

        $send = new kupione();

        $send->creator = $request->creator;
        $send->title = $request->title;
        $send->price = $request->price;
        $send->level = $request->level;
        $send->link = $request->link;
        $send->user_id = $userid;
        $send->save();
        
        return redirect()->route('kursy');
    }

    public function return(Request $request)
    {
        $useridi = $request->id;

        $user = user::find($useridi);
        $user->money=$user->money+$request->price;

        $user->save();
        
         
        $return = kupione::destroy($request->kursid);
        
        return redirect()->route('bought');
    }

    public function bought(Request $request)
    {
       
        $kursy = DB::table('kupiones')
        ->Where('user_id','=',Auth::user()->id)->paginate();
        
       return view('bought', ['kursy' => $kursy]);
    }

   public function show(Request $request)
   {
       $id = $request->id;
       $kursy = kurs::find($id);
       return view('show', ['kursy' => $kursy]);
   }
//    public function showk(Request $request)
//    {
//        $id = $request->id;
//        $kursy = kupione::find($id);
//        return view('showk', ['kursy' => $kursy]);
//    }
  
  
    
    // public function haveregister()
    // {
    //     return view('auth.login');
    // }
    // public function havelogin()
    // {
    //     return view('auth.register');
    // }
}
