<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select("select *,(select count(*) from favorites where favorite_by=".auth()->user()->id." AND product_id=posts.id) as is_favorite from  favorites LEFT JOIN posts on posts.id=favorites.product_id WHERE favorite_by=".auth()->user()->id."");
        $check_subscription = DB::select("select *,(select count(*) from user_subscriptions where user_id=". auth()->user()->id ." and NOW() <= DATE(expiration_date) ) as has_susbs  from users where id=".auth()->user()->id."");

        $categories = Categories::get();
        return view('posts.favorite_products',[
            "posts"=>$posts,
            "categories"=>$categories,
            "check_subscription"=>$check_subscription,
        ]);

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
    public function store(Request $request,$product_id)
    {
        $user_id=auth()->user()->id;
        $id = $product_id;

        $product = Favorite::where('product_id','=',$id,'AND','favorite_by','=',$user_id);
        if($product->count()>0){
        $product->delete();

        return redirect()->back();



        }else{
            
            Favorite::create([
                "favorite_by"=>$user_id,
                "product_id"=>$id
            ]);
            return redirect()->back();
        }

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
        //
    }
}
