<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categories;
use App\Models\User;

class Post extends Model
{
    protected $fillable = [
        'body',
        "title",
        "body",
        "link",
        "product_image1",
        "product_image2",
        "product_image3",
        "product_image4",
        "product_image5",
        "category",
        "selling_price",
        "product_cost",
        "profit_margin",
        "saturation",
        "influencer1",
        "influencer2",
        "influencer3",
        "influencer4",
        "influencer5",
        "influencer6",
        "influencer7",
        "influencer8",
        "influencer9",
        
        "influencer1_link",
        "influencer2_link",
        "influencer3_link",
        "influencer4_link",
        "influencer5_link",
        "influencer6_link",
        "influencer7_link",
        "influencer8_link",
        "influencer9_link",


        "influencer1_image",
        "influencer2_image",
        "influencer3_image",
        "influencer4_image",
        "influencer5_image",
        "influencer6_image",
        "influencer7_image",
        "influencer8_image",
        "influencer9_image",
        "cpa",
        "net",
        "orders",
        "votes",
        "reviews",
        "rating",
        "likes",
        "comments",
        "shares",
        "reactions",
        "source",




    ];
    use HasFactory;

    
    
   
}
