<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Categories::get();
        return view('admin.categories',["categories"=>$categories]);

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
            'name'=>'required|max:255',
            'image'=>'required'
           
            
           

        ]);

        $category = Categories::where('name','=',$request->name)->count();
        if($category>0){
        

        return redirect()->back()->with('status','Category Already Exist');

        }
       
       
        $image_name = $request->image->move(public_path('/images'),$request->image);

        Categories::create([
            "name"=>$request->name,
            "image"=>$request->$image_name
           

        ]);

        return redirect()->back()->with('status','Category Inserted');

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
        $category = Categories::find($id);
        return view('admin.edit_category',["category"=>$category]);
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
           
            
           

        ]);
        Categories::where('id', '=' , $id)->update(array('name' => $request->name));
        

        return redirect()->route('categories')->with('status','Category Updated');
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
        $category=Categories::where('id',$id)->get();
        $image_path = asset('images/'.$category->image);
        File::delete($image_path);
        $category->delete();

        return redirect()->back()->with('status','Category Deleted');
    }
}
