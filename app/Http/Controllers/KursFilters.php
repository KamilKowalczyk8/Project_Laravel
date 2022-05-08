<?php

namespace App\Http\Controllers;

use App\Models\kurs;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

use App\Models\kursnone;
use App\Models\error;
use Illuminate\Support\Facades\Auth;




class KursFilters extends Controller
{
   public function search(Request $request)
    {
        $search = $request->get('search');
        $kursy = DB::table('kurs')
                    ->Where('title','like','%'.$search.'%' )
                    ->orWhere('level','like','%'.$search.'%' )
                    ->orWhere('link','like','%'.$search.'%' )->paginate();      
                    
        return view('kursy', ['kursy' => $kursy]);

    }
}
