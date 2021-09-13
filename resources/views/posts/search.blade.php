@extends('layouts.app')

@section('content')


<div style="display:flex;flex-direction:row;flex-wrap:wrap;padding:100px;">
@foreach($posts as $post)
<div class="col-lg-4 py-2 wow zoomIn" >
    <div class="card-blog">
        <div class="header">
        <div class="post-category">
            <a >{{$post->category}}</a>
        </div>
        <a href="/product/{{ $post->id }}/show" class="post-thumb">
            <img src="{{ asset( 'images/'.$post->product_image1 ) }}" alt="">
        </a>
        </div>
        <div class="body">
        <h5 class="post-title"><a href="/product/{{ $post->id }}/show">{{ Str::limit($post->title,30)}}
            @if(strlen($post->title)>30)
                ...
            @endif
        </a></h5>
        <br>
            <form action="{{ route('favorite_or_unfavorite_post',$post->id) }}" method="post">
            @csrf
          
            <button type="submit" class="btn btn-primary float-right">  
                @if($post->is_favorite>0)
                    UnFavorite
                @else
                    Favorite

                @endif
            </button>
           
            </form>
        <hr>
        Available Info
        <br>
        <br>

        <div style="display:flex;flex-direction:row;flex-wrap:wrap;">

            @if($post->influencer1 && $post->influencer1_link && $post->influencer1_image)
            <a href="{{ $post->influencer1_link }}" style="text-decoration:none;">   
                <div style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer1_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;float:left;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer1 }}</p>
                </div>
                </a>
            @endif


            
            @if($post->influencer2 && $post->influencer2_link && $post->influencer2_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer2_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer2_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer2 }}</p>
                </div>
                </a> 
            @endif




           
            @if($post->influencer3 && $post->influencer3_link && $post->influencer3_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer3_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer3_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer3 }}</p>
                </div>
                </a> 
            @endif



            @if($post->influencer4 && $post->influencer4_link && $post->influencer4_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer4_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer4_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer4 }}</p>
                </div>
                </a> 
            @endif



            @if($post->influencer5 && $post->influencer5_link && $post->influencer5_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer5_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer5_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer5 }}</p>
                </div>
                </a> 
            @endif



            @if($post->influencer6 && $post->influencer6_link && $post->influencer6_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer6_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer6_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer6 }}</p>
                </div>
                </a> 
            @endif


            @if($post->influencer7 && $post->influencer7_link && $post->influencer7_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer7_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer7_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer7 }}</p>
                </div>
                </a> 
            @endif


            @if($post->influencer8 && $post->influencer8_link && $post->influencer8_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer8_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer8_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer8 }}</p>
                </div>
                </a> 
            @endif




            @if($post->influencer9 && $post->influencer9_link && $post->influencer9_image)
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="{{ $post->influencer9_link }}" style="text-decoration:none;">   
            <div  style="display:flex;flex-direction:row;">
                <img src="{{ asset( 'images/'.$post->influencer9_image ) }}" alt="" style="border-radius:100%;height:20px;width:20px;">
            &nbsp;
            &nbsp;
                <p>{{ $post->influencer9 }}</p>
                </div>
                </a> 
            @endif



        </div>
        
        </div>
    </div>
    </div>
@endforeach





</div>

      
            
@endsection