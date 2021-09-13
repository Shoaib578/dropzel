<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

class PostsController extends Controller
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
      

        $posts = post::get();
       
        
        return view('admin.all_products',["posts"=>$posts]);
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

       
        $categories = Categories::get();
        return view('admin.add_product',["categories"=>$categories]);
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
        $productimage1Name;
        $productimage2Name;
        $productimage3Name;
        $productimage4Name;
        $productimage5Name;

        $influencer_image1Name;
        $influencer_image2Name;
        $influencer_image3Name;
        $influencer_image4Name;
        $influencer_image5Name;
        $influencer_image6Name;
        $influencer_image7Name;
        $influencer_image8Name;
        $influencer_image9Name;


        $this->validate($request,[
            'title'=>'required|max:255',
           
            'category'=>'required',

            'link'=>'required|max:255',
            'content'=>'required|max:255',
            'selling_price'=>'required|max:255',
            'product_cost'=>'required|max:255',

            'saturation'=>'required|max:255',
            'profit_margin'=>'required|max:255',
            'cpa'=>'required|max:255',
            'net'=>'required|max:255',
            'source'=>'required|max:255',
            'orders'=>'required|max:255',
            'votes'=>'required|max:255',
            'reviews'=>'required|max:255',
            'rating'=>'required|max:255',

            'likes'=>'required|max:255',
            'comments'=>'required|max:255',
            'shares'=>'required|max:255',
            'reactions'=>'required|max:255',
            


           

        ]);



        $title = $request->title;

        
        $content = $request->content;
        $link = $request->link;


        if($request->product_image1){
            $productimage1Name = time().'.'.$request->product_image1->getClientOriginalExtension();
            $request->product_image1->move(public_path('/images'),$productimage1Name);
        }else{
            $productimage1Name="";
        }
        

        if($request->product_image2){
            $productimage2Name = time().'.'.$request->product_image2->getClientOriginalExtension();
            $request->product_image2->move(public_path('/images'),$productimage2Name);
        }else{
            $productimage2Name= "";
        }
        


        if($request->product_image3){
            $productimage3Name = time().'.'.$request->product_image3->getClientOriginalExtension();
            $request->product_image3->move(public_path('/images'),$productimage3Name);
        }else{
            $productimage3Name="";
        }


        if($request->product_image4){
            $productimage4Name = time().'.'.$request->product_image4->getClientOriginalExtension();
            $request->product_image4->move(public_path('/images'),$productimage4Name);
        }else{
            $productimage4Name="";
        }

        



        if($request->product_image5){
            $productimage5Name = time().'.'.$request->product_image5->getClientOriginalExtension();
            $request->product_image5->move(public_path('/images'),$productimage5Name);
        }else{
            $productimage5Name="";
        }



       


        $category = $request->category;
        $selling_price = $request->selling_price;
        $product_cost = $request->product_cost;
        $saturation = $request->saturation;
        $profit_margin = $request->profit_margin;
        $influencer1= $request->influencer1;
        $influencer2= $request->influencer2;
        $influencer3= $request->influencer3;
        $influencer4= $request->influencer4;
        $influencer5= $request->influencer5;
        $influencer6= $request->influencer6;
        $influencer7= $request->influencer7;
        $influencer8= $request->influencer8;
        $influencer9= $request->influencer9;

        $influencer1_link= $request->influencer1_link;
        $influencer2_link= $request->influencer2_link;
        $influencer3_link= $request->influencer3_link;
        $influencer4_link= $request->influencer4_link;
        $influencer5_link= $request->influencer5_link;
        $influencer6_link= $request->influencer6_link;
        $influencer7_link= $request->influencer7_link;
        $influencer8_link= $request->influencer8_link;
        $influencer9_link= $request->influencer9_link;

        $cpa = $request->cpa;
        $net = $request->net;
        $source = $request->source;
        $orders = $request->orders;
        $votes = $request->votes;
        $reviews = $request->reviews;
        $rating = $request->rating;
        $likes = $request->likes;
        $comments = $request->comments;
        $shares = $request->shares;
        $reactions = $request->reactions;


       if($request->influencer1_image){
           $influencer_image1Name = time().'.'.$request->influencer1_image->getClientOriginalExtension();
           $request->influencer1_image->move(public_path('/images'),$influencer_image1Name);

       }else{
        $influencer_image1Name="";
       }



       if($request->influencer2_image){
        $influencer_image2Name = time().'.'.$request->influencer2_image->getClientOriginalExtension();
        $request->influencer2_image->move(public_path('/images'),$influencer_image2Name);

    }else{
        $influencer_image2Name="";
    }


    if($request->influencer3_image){
        $influencer_image3Name = time().'.'.$request->influencer3_image->getClientOriginalExtension();
        $request->influencer3_image->move(public_path('/images'),$influencer_image3Name);

    }else{
        $influencer_image3Name="";
    }


    if($request->influencer4_image){
        $influencer_image4Name = time().'.'.$request->influencer4_image->getClientOriginalExtension();
        $request->influencer4_image->move(public_path('/images'),$influencer_image4Name);

    }else{
        $influencer_image4Name="";
    }


    if($request->influencer5_image){
        $influencer_image5Name = time().'.'.$request->influencer5_image->getClientOriginalExtension();
        $request->influencer5_image->move(public_path('/images'),$influencer_image5Name);

    }else{
        $influencer_image5Name="";
    }


    if($request->influencer6_image){
        $influencer_image6Name = time().'.'.$request->influencer6_image->getClientOriginalExtension();
        $request->influencer6_image->move(public_path('/images'),$influencer_image6Name);

    }else{
        $influencer_image6Name="";
    }


    if($request->influencer7_image){
        $influencer_image7Name = time().'.'.$request->influencer7_image->getClientOriginalExtension();
        $request->influencer7_image->move(public_path('/images'),$influencer_image7Name);

    }else{
        $influencer_image7Name="";
    }


    if($request->influencer8_image){
        $influencer_image8Name = time().'.'.$request->influencer8_image->getClientOriginalExtension();
        $request->influencer8_image->move(public_path('/images'),$influencer_image8Name);

    }else{
        $influencer_image8Name="";
    }

    if($request->influencer9_image){
        $influencer_image9Name = time().'.'.$request->influencer9_image->getClientOriginalExtension();
        $request->influencer9_image->move(public_path('/images'),$influencer_image9Name);

    }else{
        $influencer_image9Name="";
    }





        Post::create([
            "title"=>$title,
            "body"=>$content,
            "link"=>$link,
            "product_image1"=>$productimage1Name,
            "product_image2"=>$productimage2Name,
            "product_image3"=>$productimage3Name,
            "product_image4"=>$productimage4Name,
            "product_image5"=>$productimage5Name,
            "category"=>$category,
            "selling_price"=>$selling_price,
            "product_cost"=>$product_cost,
            "profit_margin"=>$profit_margin,
            "saturation"=>$saturation,
            "influencer1"=>$influencer1,
            "influencer2"=>$influencer2,
            "influencer3"=>$influencer3,
            "influencer4"=>$influencer4,
            "influencer5"=>$influencer5,
            "influencer6"=>$influencer6,
            "influencer7"=>$influencer7,
            "influencer8"=>$influencer8,
            "influencer9"=>$influencer9,


            "influencer1_link"=>$influencer1_link,
            "influencer2_link"=>$influencer2_link,
            "influencer3_link"=>$influencer3_link,
            "influencer4_link"=>$influencer4_link,
            "influencer5_link"=>$influencer5_link,
            "influencer6_link"=>$influencer6_link,
            "influencer7_link"=>$influencer7_link,
            "influencer8_link"=>$influencer8_link,
            "influencer9_link"=>$influencer9_link,


            "influencer1_image"=>$influencer_image1Name,
            "influencer2_image"=>$influencer_image2Name,
            "influencer3_image"=>$influencer_image3Name,
            "influencer4_image"=>$influencer_image4Name,
            "influencer5_image"=>$influencer_image5Name,
            "influencer6_image"=>$influencer_image6Name,
            "influencer7_image"=>$influencer_image7Name,
            "influencer8_image"=>$influencer_image8Name,
            "influencer9_image"=>$influencer_image9Name,

            "cpa"=>$cpa,
            "net"=>$net,
            "source"=>$source,
            "orders"=>$orders,
            "votes"=>$votes,
            "reviews"=>$reviews,
            "rating"=>$rating,
            "likes"=>$likes,
            "comments"=>$comments,
            "shares"=>$shares,
            "reactions"=>$reactions,


        ]);
        return redirect()->back()->with('status','Product Published Successfully');        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(auth()->user()->is_admin==0){
            return redirect()->route('home');
        }


        $post= Post::find($id);
        return view('admin.show_product',["post"=>$post]);
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

        
        $post = post::find($id);
        $categories =Categories::get();
        return view('admin.edit_product',["post"=>$post,"categories"=>$categories]);
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

        $post = post::find($id);
        
        $productimage1Name = $post->product_image1;
        $productimage2Name = $post->product_image2;
        $productimage3Name = $post->product_image3;
        $productimage4Name = $post->product_image4;
        $productimage5Name = $post->product_image5;

        $influencer_image1Name = $post->influencer1_image;
        $influencer_image2Name = $post->influencer2_image;
        $influencer_image3Name = $post->influencer3_image;
        $influencer_image4Name = $post->influencer4_image;
        $influencer_image5Name = $post->influencer5_image;
        $influencer_image6Name = $post->influencer6_image;
        $influencer_image7Name = $post->influencer7_image;
        $influencer_image8Name = $post->influencer8_image;
        $influencer_image9Name = $post->influencer9_image;
        $cpa = $request->cpa;
        $net = $request->net;
        $source = $request->source;
        $orders = $request->orders;
        $votes = $request->votes;
        $reviews = $request->reviews;
        $rating = $request->rating;
        $likes = $request->likes;
        $comments = $request->comments;
        $shares = $request->shares;
        $reactions = $request->reactions;

        $this->validate($request,[
            'title'=>'required|max:255',
           
            'category'=>'required',

            'link'=>'required|max:255',
            'content'=>'required|max:255',
            'selling_price'=>'required|max:255',
            'product_cost'=>'required|max:255',

            'saturation'=>'required|max:255',
            'profit_margin'=>'required|max:255',
            
            'cpa'=>'required|max:255',
            'net'=>'required|max:255',
            'source'=>'required|max:255',
            'orders'=>'required|max:255',
            'votes'=>'required|max:255',
            'reviews'=>'required|max:255',
            'rating'=>'required|max:255',

            'likes'=>'required|max:255',
            'comments'=>'required|max:255',
            'shares'=>'required|max:255',
            'reactions'=>'required|max:255',
            


           

        ]);


       
        $title = $request->title;

        
        $content = $request->content;
        $link = $request->link;


        if($request->product_image1){
            if($post->product_image1){
                $path = asset('images/'.$post->product_image1);
                File::delete($path);
            }

            $productimage1Name = time().'.'.$request->product_image1->getClientOriginalExtension();
            $request->product_image1->move(public_path('/images'),$productimage1Name);
        }
        

        if($request->product_image2){
            if($post->product_image2){
                $path = asset('images/'.$post->product_image2);
                File::delete($path);
            }


            $productimage2Name = time().'.'.$request->product_image2->getClientOriginalExtension();
            $request->product_image2->move(public_path('/images'),$productimage2Name);
        }
        


        if($request->product_image3){
            if($post->product_image3){
                $path = asset('images/'.$post->product_image3);
                File::delete($path);
            }
            $productimage3Name = time().'.'.$request->product_image3->getClientOriginalExtension();
            $request->product_image3->move(public_path('/images'),$productimage3Name);
        }


        if($request->product_image4){
            if($post->product_image4){
                $path = asset('images/'.$post->product_image4);
                File::delete($path);
            }
            $productimage4Name = time().'.'.$request->product_image4->getClientOriginalExtension();
            $request->product_image4->move(public_path('/images'),$productimage4Name);
        }

        



        if($request->product_image5){
            if($post->product_image5){
                $path = asset('images/'.$post->product_image5);
                File::delete($path);
            }
            $productimage5Name = time().'.'.$request->product_image5->getClientOriginalExtension();
            $request->product_image5->move(public_path('/images'),$productimage5Name);
        }



       


        $category = $request->category;
        $selling_price = $request->selling_price;
        $product_cost = $request->product_cost;
        $saturation = $request->saturation;
        $profit_margin = $request->profit_margin;
        $influencer1= $request->influencer1;
        $influencer2= $request->influencer2;
        $influencer3= $request->influencer3;
        $influencer4= $request->influencer4;
        $influencer5= $request->influencer5;
        $influencer6= $request->influencer6;
        $influencer7= $request->influencer7;
        $influencer8= $request->influencer8;
        $influencer9= $request->influencer9;

        $influencer1_link= $request->influencer1_link;
        $influencer2_link= $request->influencer2_link;
        $influencer3_link= $request->influencer3_link;
        $influencer4_link= $request->influencer4_link;
        $influencer5_link= $request->influencer5_link;
        $influencer6_link= $request->influencer6_link;
        $influencer7_link= $request->influencer7_link;
        $influencer8_link= $request->influencer8_link;
        $influencer9_link= $request->influencer9_link;


       if($request->influencer1_image){
        if($post->influencer1_image){
            $path = asset('images/'.$post->influencer1_image);
            File::delete($path);
        }
           $influencer_image1Name = time().'.'.$request->influencer1_image->getClientOriginalExtension();
           $request->influencer1_image->move(public_path('/images'),$influencer_image1Name);

       }



       if($request->influencer2_image){
        if($post->influencer2_image){
            $path = asset('images/'.$post->influencer2_image);
            File::delete($path);
        }
        $influencer_image2Name = time().'.'.$request->influencer2_image->getClientOriginalExtension();
        $request->influencer2_image->move(public_path('/images'),$influencer_image2Name);

    }


    if($request->influencer3_image){
        if($post->influencer3_image){
            $path = asset('images/'.$post->influencer3_image);
            File::delete($path);
        }
        $influencer_image3Name = time().'.'.$request->influencer3_image->getClientOriginalExtension();
        $request->influencer3_image->move(public_path('/images'),$influencer_image3Name);

    }


    if($request->influencer4_image){
        if($post->influencer4_image){
            $path = asset('images/'.$post->influencer4_image);
            File::delete($path);
        }
        $influencer_image4Name = time().'.'.$request->influencer4_image->getClientOriginalExtension();
        $request->influencer4_image->move(public_path('/images'),$influencer_image4Name);

    }


    if($request->influencer5_image){
        if($post->influencer5_image){
            $path = asset('images/'.$post->influencer5_image);
            File::delete($path);
        }
        $influencer_image5Name = time().'.'.$request->influencer5_image->getClientOriginalExtension();
        $request->influencer5_image->move(public_path('/images'),$influencer_image5Name);

    }


    if($request->influencer6_image){
        if($post->influencer6_image){
            $path = asset('images/'.$post->influencer6_image);
            File::delete($path);
        }
        $influencer_image6Name = time().'.'.$request->influencer6_image->getClientOriginalExtension();
        $request->influencer6_image->move(public_path('/images'),$influencer_image6Name);

    }


    if($request->influencer7_image){
        if($post->influencer7_image){
            $path = asset('images/'.$post->influencer7_image);
            File::delete($path);
        }
        $influencer_image7Name = time().'.'.$request->influencer7_image->getClientOriginalExtension();
        $request->influencer7_image->move(public_path('/images'),$influencer_image7Name);

    }


    if($request->influencer8_image){
        if($post->influencer8_image){
            $path = asset('images/'.$post->influencer8_image);
            File::delete($path);
        }
        $influencer_image8Name = time().'.'.$request->influencer8_image->getClientOriginalExtension();
        $request->influencer8_image->move(public_path('/images'),$influencer_image8Name);

    }

    if($request->influencer9_image){
        if($post->influencer9_image){
            $path = asset('images/'.$post->influencer9_image);
            File::delete($path);
        }
        $influencer_image9Name = time().'.'.$request->influencer9_image->getClientOriginalExtension();
        $request->influencer9_image->move(public_path('/images'),$influencer_image9Name);

    }



        Post::where('id', '=' , $id)->update(array(
            "title"=>$title,
            "body"=>$content,
            "link"=>$link,
            "product_image1"=>$productimage1Name,
            "product_image2"=>$productimage2Name,
            "product_image3"=>$productimage3Name,
            "product_image4"=>$productimage4Name,
            "product_image5"=>$productimage5Name,
            "category"=>$category,
            "selling_price"=>$selling_price,
            "product_cost"=>$product_cost,
            "profit_margin"=>$profit_margin,
            "saturation"=>$saturation,
            "influencer1"=>$influencer1,
            "influencer2"=>$influencer2,
            "influencer3"=>$influencer3,
            "influencer4"=>$influencer4,
            "influencer5"=>$influencer5,
            "influencer6"=>$influencer6,
            "influencer7"=>$influencer7,
            "influencer8"=>$influencer8,
            "influencer9"=>$influencer9,


            "influencer1_link"=>$influencer1_link,
            "influencer2_link"=>$influencer2_link,
            "influencer3_link"=>$influencer3_link,
            "influencer4_link"=>$influencer4_link,
            "influencer5_link"=>$influencer5_link,
            "influencer6_link"=>$influencer6_link,
            "influencer7_link"=>$influencer7_link,
            "influencer8_link"=>$influencer8_link,
            "influencer9_link"=>$influencer9_link,


            "influencer1_image"=>$influencer_image1Name,
            "influencer2_image"=>$influencer_image2Name,
            "influencer3_image"=>$influencer_image3Name,
            "influencer4_image"=>$influencer_image4Name,
            "influencer5_image"=>$influencer_image5Name,
            "influencer6_image"=>$influencer_image6Name,
            "influencer7_image"=>$influencer_image7Name,
            "influencer8_image"=>$influencer_image8Name,
            "influencer9_image"=>$influencer_image9Name,
            
                "cpa"=>$cpa,
                "net"=>$net,
                "source"=>$source,
                "orders"=>$orders,
                "votes"=>$votes,
                "reviews"=>$reviews,
                "rating"=>$rating,
                "likes"=>$likes,
                "comments"=>$comments,
                "shares"=>$shares,
                "reactions"=>$reactions,
        ));


        
        return redirect()->back()->with('status','Product Updated Successfully');  
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

        
       $post = Post::find($id);

       if($post->product_image1){
           $pimage1_path = asset('images/'.$post->product_image1);
           File::delete($pimage1_path);
       }


       if($post->product_image2){
        $pimage2_path = asset('images/'.$post->product_image2);
        File::delete($pimage2_path);
    }


    if($post->product_image3){
        $pimage3_path = asset('images/'.$post->product_image3);
        File::delete($pimage3_path);
    }


    if($post->product_image4){
        $pimage4_path = asset('images/'.$post->product_image4);
        File::delete($pimage4_path);
    }


    if($post->product_image5){
        $pimage5_path = asset('images/'.$post->product_image5);
        File::delete($pimage5_path);
    }



    if($post->influencer1_image){
        $iimage1_path = asset('images/'.$post->influencer1_image);
        File::delete($iimage1_path);
    }



    if($post->influencer2_image){
        $iimage2_path = asset('images/'.$post->influencer2_image);
        File::delete($iimage2_path);
    }


    if($post->influencer3_image){
        $iimage3_path = asset('images/'.$post->influencer3_image);
        File::delete($iimage3_path);
    }


    if($post->influencer4_image){
        $iimage4_path = asset('images/'.$post->influencer4_image);
        File::delete($iimage4_path);
    }


    if($post->influencer5_image){
        $iimage5_path = asset('images/'.$post->influencer5_image);
        File::delete($iimage5_path);
    }


    if($post->influencer6_image){
        $iimage6_path = asset('images/'.$post->influencer6_image);
        File::delete($iimage6_path);
    }

    if($post->influencer7_image){
        $iimage7_path = asset('images/'.$post->influencer7_image);
        File::delete($iimage7_path);
    }


    if($post->influencer8_image){
        $iimage8_path = asset('images/'.$post->influencer8_image);
        File::delete($iimage8_path);
    }

    if($post->influencer9_image){
        $iimage9_path = asset('images/'.$post->influencer9_image);
        File::delete($iimage9_path);
    }


    $post->delete();
    return redirect()->back()->with('status','Product Deleted');


    }
}
