<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }

        $users= user::where('id', '!=' , auth()->user()->id)->get();
        
        return view('admin.home',["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }
        return view('admin.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }


        $this->validate($request,[
            'name'=>'required|max:255',
           
            'email'=>'required|email|max:255',
            'password'=>'required|max:255',
            

        ]);
        
        $user = user::where('email','=',$request->email)->count();
        if($user>0){
        

        return redirect()->route('add_user')->with('status','User Already Exist');

        }

        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "is_admin"=>$request->is_admin

        ]);
       
        return redirect()->route('add_user')->with('status','User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }

     $user = user::find($id);
     return view('admin.edit_user',["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }
        $this->validate($request,[
            'name'=>'required|max:255',
           
            'email'=>'required|email|max:255',
            'password'=>'required|max:255',
           

        ]);
        user::where('id', '=' , $id)->update(array('name' => $request->name,'email'=>$request->name,'password'=>Hash::make($request->password)));
        

        return redirect()->route('admin_home');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }
        user::where('id',$id)->delete();
        return redirect()->route('admin_home');
    }
}
