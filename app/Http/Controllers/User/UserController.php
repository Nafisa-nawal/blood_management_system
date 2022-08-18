<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; //this is model
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        // dd($id);

        $currentuser = User::find($id);
        return view('user.user_dashboard',compact('currentuser'));
    }

    public function info($user_id)
    {
       
        // $user = DB::select('select * from users where id="'.$user_id.'"');
        // dd($user);
        $user_info = User::with('bloodGroup')->where('id',$user_id)->first();
        // $user_info = $user[0];

        return view('user.show',compact('user_info'));
    }

    public function change_info($user_id)
    {
       
        // $user = DB::select('select * from users where id="'.$user_id.'"');
         //dd($user_id);
         $info =User::where('id',$user_id)->first();
       //dd($info);
       return view('user.changeinfo',compact('info'));

    }
public function update_info(Request $request , $user_id)
    {
       
        
      //dd($request->phone_number);
       $user=User::find($user_id);
       //dd($user);
       $user->name=$request->name;
       $user->phone_number=$request->phone_number;
       $user->save();
       session()->flash('message', "Information changed Successfully");
        return redirect()->route('user.profile', $user_id);

    }

    
    
   

   

   
}
