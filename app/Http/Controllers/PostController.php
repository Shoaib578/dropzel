<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()&&auth()->user()->is_admin == 1){
            return redirect()->route('admin_home');
        }

        $admin = User::where('is_admin','=',1)->count();
        if($admin>0){
            Log::info('This is some useful information.');
        }else{
            User::create([
                "name"=>"admin",
                "email"=>"theadmin26@gmail.com",
                "password"=>Hash::make('Games5879'),
                "is_admin"=>1
            ]);
        }


        $categories = Categories::get();

        if(auth()->user()){
            $posts = DB::select("select *,(select count(*) from favorites where favorite_by=".auth()->user()->id." AND product_id=posts.id) as is_favorite from posts");

        }else{
            $posts = DB::select("select * from posts");

        }
        
       
        return view('posts.index',[
            "posts"=>$posts,
            "categories"=>$categories,
           
        ]);
    }

    public function search($text){
        if(auth()->user()&&auth()->user()->is_admin == 1){
            return redirect()->route('admin_home');
        }
        if(auth()->user()){

        $posts = DB::select("select *,(select count(*) from favorites where favorite_by=".auth()->user()->id." AND product_id=posts.id) as is_favorite from posts WHERE category='".$text."'");
        }else{
        $posts = DB::select("select *from posts WHERE category='".$text."'");

        }
        $categories = Categories::get();
        return view('posts.search',[
            "posts"=>$posts,
            "categories"=>$categories,
          

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        if(auth()->user()&&auth()->user()->is_admin == 1){
            return redirect()->route('admin_home');
        }

        
        $post=Post::find($id);
        $categories = Categories::get();
        $related_products = DB::select("SELECT * from posts where category='".$post->category."'");
        if(auth()->user()){

        $check_subscription = DB::select("select *,(select count(*) from user_subscriptions where user_id=". auth()->user()->id ." and NOW() <= DATE(expiration_date) ) as has_susbs  from users where id=".auth()->user()->id."");

        return view('posts.show_product',["post"=>$post,"categories"=>$categories,"related_products"=>$related_products,'check_subscription'=>$check_subscription]);
        }else{
        return view('posts.show_product',["post"=>$post,"categories"=>$categories,"related_products"=>$related_products]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}
