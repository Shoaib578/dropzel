<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserSubscriptions;
use App\Models\Categories;
use App\Models\Favorite;
use App\Models\Subscriptions;
use Illuminate\Support\Facades\Hash;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get_posts',function(){
    $user_id = request('user_id');
    $result;
    $posts = DB::select("select *,(select count(*) from favorites where favorite_by=$user_id AND product_id=posts.id) as is_favorite from posts");
    
    $categories = Categories::get();
  
        $result = [
            
            "posts"=>$posts,
            "categories"=>$categories
        ];

        return $result;
   
    
});

Route::get('/show_post',function(){
    $user_id = request('user_id');
    $product_id = request('product_id');
    $categories = Categories::get();

    $check_subscription = DB::select("select *,(select count(*) from user_subscriptions where user_id=$user_id and NOW() <= DATE(expiration_date) ) as has_susbs  from users where id=$user_id");
    $post = DB::select("SELECT *,(select count(*) from favorites where favorite_by=$user_id AND product_id=posts.id) as is_favorite FROM posts where id=$product_id");
    return [
        "check_subscription"=>$check_subscription,
        "post"=>$post,
        "categories"=>$categories
    ];
});





Route::post('/register_user',function(){

$name = request('name');
$email = request('email');
$password = request('password');


$user = user::where('email','=',$email)->count();
        if($user>0){
        

        return 'Email already Exist Please Try Again';

        }
        User::create([
            "name"=>$name,
            "email"=>$email,
            "password"=>Hash::make($password),
            "is_admin"=>0

        ]);
        return 'You are registered Succesfully';
        


});



Route::post('/login_user',function(){

    $email = request('email');
    $password = request('password');
    $user = User::where('email','=',$email)->get();
    
    if($user->count() == 1  && Hash::check($password, $user[0]->password)){
        return [
            "msg"=>"logged in",
            "user"=>$user
        ];
    }else{
        return [
            "msg"=>"invalid login details",
            "user"=>[]
        ];
    }
    
    
});



Route::get('/search_product_by_category',function(){
$category = request('category');
$user_id = request('user_id');

$categories = Categories::get();

$posts = $posts = DB::select("select *,(select count(*) from favorites where favorite_by=$user_id AND product_id=posts.id) as is_favorite from posts WHERE category=$category");

$categories = Categories::get();

$result = [
        
        "posts"=>$posts,
        "categories"=>$categories
        ];
    
        return $result;
       
});



Route::get('/favorite_or_unfavorite',function(){
$user_id=request('user_id');
$product_id = request('product_id');

$product = Favorite::where('product_id','=',$product_id,'AND','favorite_by','=',$user_id);
if($product->count()>0){
$product->delete();

return [
    "msg"=>"unfavorite",
];;


}else{
    Favorite::create([
        "favorite_by"=>$user_id,
        "product_id"=>$product_id
    ]);
    return [
        "msg"=>"added to favorite"
    ];
}

});


Route::get('/get_last_week_products',function(){
$user_id = request('user_id');
$posts = DB::select("select *,(select count(*) from favorites where favorite_by=$user_id AND product_id=posts.id) as is_favorite from posts where created_at between date_sub(now(),INTERVAL 1 WEEK) and now()");
return [
    "posts"=>$posts
];

});

Route::get('/get_favorite_products',function(){
    $user_id = request('user_id');
    $posts = DB::select("select *,(select count(*) from favorites where favorite_by=$user_id AND product_id=posts.id) as is_favorite from  favorites LEFT JOIN posts on posts.id=favorites.product_id WHERE favorite_by=$user_id");
    return [
        "posts"=>$posts
    ];
    
    });


Route::get('/list_all_subscriptions',function(){
    return [
        "subscriptions"=>Subscriptions::get(),
    ];
});

Route::post('/buy_subscription',function(){
$duration_days = request('duration_days');
$user_id = request('user_id');


DB::insert("INSERT INTO user_subscriptions(user_id,start_date,expiration_date) VALUES($user_id,NOW(),DATE_ADD(NOW(), INTERVAL $duration_days DAY) )");
return 'You have Bought it Success fully';

});






