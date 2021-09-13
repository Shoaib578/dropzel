<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriptions;

class SubscriptionController extends Controller
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

        $subscriptions = Subscriptions::get();
        return view('admin.subscriptions',["subscriptions"=>$subscriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'price'=>'required',
           
            'duration'=>'required',
            
           

        ]);

        Subscriptions::create([
            "duration"=>$request->duration,
            "price"=>$request->price,
        ]);
        return redirect()->back()->with('status','Subscription Added');

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


        $subs = Subscriptions::find($id);
        return view('admin.edit_subscription',["subs"=>$subs]);
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
            'price'=>'required',
           
            'duration'=>'required',
            
           

        ]);
        Subscriptions::where('id', '=' , $id)->update(array('duration' => $request->duration,'price'=>$request->price));
        return redirect()->route('subscriptions')->with('status','Subscription Updated');

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

        $subs = Subscriptions::find($id);
        $subs->delete();
        return redirect()->back()->with('status','Subscription Deleted');
    }
}
