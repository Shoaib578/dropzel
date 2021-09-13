@extends('layouts.app')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
  <br>
  <br>

    <center>
<div class="w3-content w3-display-container border">
    @if($post->product_image1)
        <img class="mySlides" src="{{ asset( 'images/'.$post->product_image1 ) }}" style="width:80%;height:300px;">
    @endif


    @if($post->product_image2)
        <img class="mySlides" src="{{ asset( 'images/'.$post->product_image2 ) }}" style="width:80%;height:300px;">
    @endif

    @if($post->product_image3)
        <img class="mySlides" src="{{ asset( 'images/'.$post->product_image3 ) }}" style="width:80%;height:300px;">
    @endif

    @if($post->product_image4)
        <img class="mySlides" src="{{ asset( 'images/'.$post->product_image4 ) }}" style="width:80%;height:300px;">
    @endif


    @if($post->product_image5)
        <img class="mySlides" src="{{ asset( 'images/'.$post->product_image5 ) }}" style="width:80%;height:300px;">
    @endif
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>


</center>
<br >
<br >



<h2 style="margin-left:17%;color:black;">{{ $post->title }}</h2>

<p style="margin-left:17%;color:black;background-color:gray;width:70px;border-radius:20px;height:20px;justify-content:center;display:flex;align-items:center">{{ $post->category }}</p>

<br >
<br >

<b style="margin-left:17%;color:black;">Description : </b>
<br >
<br >

<p style="margin-left:17%;color:black;width:70%;">{{ $post->body }}</p>

<br>
<br>

@if(auth()->user() && $check_subscription->has_susbs>0)


    <div class="border border-success float-left" style="border-radius:5px;padding:10px;margin-left:18%;margin-bottom:20px;">
    <center>
        <h3>Your Profit & Cost</h3>
        
    </center>

    <div style="display:flex;flex-direction:row;justify-content:space-between;padding:50px;">
    <h4 style="color:black">${{ $post->selling_price }}

    <p style="font-size:12px;color:gray">SELLING PRICE</p>



    </h4>
    <h4 style="color:black">${{ $post->product_cost }}
    <p style="font-size:12px;color:gray">PRODUCT COST</p>

    </h4>
    <h4 style="color:black">${{ $post->profit_margin }}
    <p style="font-size:12px;color:gray">PROFIT MARGIN</p>

    </h4>

    </div>
    </div>








    <div class="border border-success float-right" style="border-radius:5px;padding:10px;margin-right:18%;margin-bottom:20px;">
    <center>
        <h3>SATURATION INSPECTOR</h3>
        
    </center>

    <br>
    <br>

    <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $post->saturation }}"
    aria-valuemin="0" aria-valuemax="100" style="width:{{ $post->saturation }}%">
        {{ $post->saturation }}%
    </div>
    </div>
    <br>
    <br>

    <center>
    <h5 style="color:black">Total stores selling this product: {{$post->saturation}}</h5>
    </center>

    <br>
    <br>
    </div>


    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>


    <b style="color:black;margin-left:18%;">Available Info : </b>
    <br>

    <div style="display:flex;flex-direction:row;padding:15px;margin-left:18%;flex-wrap:wrap;">
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
            <br>
            <br>

            <hr>
            
            <center>
            <div style="flex-direction:row;display:flex;padding:50px;flex-wrap:wrap;margin-left:14%">

            <div>

            <div style="display:flex;flex-direction:row;padding:10px">
            <img src="{{ asset('css/normal_assets/img/dollar-sign.png') }}" style="width:60px" alt="">
            <h5 style="margin-top:20px;margin-left:10px">Profits:</h5>

            </div>

            <div class="border" style="background-color:#F8F8FF	;width:200px">
        
            <br>
            <div style="flex-direction:row;display:flex">

            <p style="margin-left:10px;font-weight:bold;font-size:14px;">Profit margin : </p><p>${{ $post->profit_margin }}</p>
            </div>
                

                <div style="flex-direction:row;display:flex">

                <p style="margin-left:10px;font-weight:bold;font-size:14px;">CPA : </p><p>${{ $post->cpa }}</p>
                </div>

            
                

                <div style="flex-direction:row;display:flex">

                <p style="margin-left:10px;font-weight:bold;font-size:14px;">NET : </p><p>${{ $post->net }}</p>
                </div>

            </div>
            
            </div>








            <div>

    <div style="display:flex;flex-direction:row;padding:10px;margin-left:60px;">
    <img src="{{ asset('css/normal_assets/img/analytics.png') }}" style="width:60px" alt="">
    <h5 style="margin-top:20px;margin-left:10px">Analytics:</h5>

    </div>

    <div class="border" style="background-color:#F8F8FF	;width:200px;margin-left:60px;">

    <br>
    <div style="flex-direction:row;display:flex">

    <p style="margin-left:10px;font-weight:bold;font-size:14px;">Source : </p><p>{{ $post->source }}</p>
    </div>
        

        <div style="flex-direction:row;display:flex">

        <p style="margin-left:10px;font-weight:bold;font-size:14px;">Orders : </p><p>{{ $post->orders }}</p>
        </div>


        <div style="flex-direction:row;display:flex">

        <p style="margin-left:10px;font-weight:bold;font-size:14px;">Votes : </p><p>{{ $post->votes }}</p>
        </div>


        <div style="flex-direction:row;display:flex">

        <p style="margin-left:10px;font-weight:bold;font-size:14px;">Reviews : </p><p>{{ $post->reviews }}</p>
        </div>


        <div style="flex-direction:row;display:flex">

        <p style="margin-left:10px;font-weight:bold;font-size:14px;">Rating : </p><p>{{ $post->rating }}</p>
        </div>


    
        

    

    </div>
    
    </div>



    <div>

    <div style="display:flex;flex-direction:row;padding:10px;margin-left:60px;">
    <img src="{{ asset('css/normal_assets/img/engagement.png') }}" style="width:60px;" alt="">
    <h5 style="margin-top:20px;margin-left:10px">Engagement:</h5>

    </div>

    <div class="border" style="margin-left:60px;background-color:#F8F8FF; padding:10px">

    <br>
    <div style="flex-direction:row;display:flex">
    <div>
        <h3>{{ $post->likes }}</h3>
        LIKES
    </div>

    &nbsp;
    &nbsp;
    <div>
        <h3>{{ $post->comments }}</h3>
        COMMENTS
    </div>


    &nbsp;
    &nbsp;
    <div>
        <h3>{{ $post->shares }}</h3>
        SHARES
    </div>

    &nbsp;
    &nbsp;
    <div>
        <h3>{{ $post->reactions }}</h3>
        REACTIONS
    </div>
    </div>
        

    
    </div>
    
    </div>


            </div>
            </center>



        <br>

        <br>
        <br>





        
        
        <!-- Related Products Start -->
        <div class="container" style="margin-left:14%">
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    @foreach($related_products as $related)
                        <div class="item">
                            <div class="pad15">
                                        <div class="header">
                            

                        

                            <a href="/product/{{ $related->id }}/show" class="post-thumb">
                            
                                <img src="{{ asset( 'images/'.$related->product_image1 ) }}" alt="" style="width:100%">
                            </a>
                            </div>
                            <a href="/product/{{ $related->id }}/show" class="post-thumb">

                                <p class="lead">{{ $related->title }}</p>
                            </a>
                                <p></p>
                                <p></p>
                                <p>Category : {{ $related->category }}</p>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
        <br>
        <br>

    </div>


    @else   
    <center>
                    <br>
                    <br>
            <h1>You Will Need To Buy a Subscription To Be Able To Explore More</h1>
            <p>Click Below To Buy a Subscription</p>
            <a href="{{ route('user_subscriptions') }}" style="text-decoration:none">Buy Now</a>


        </center>
    @endif
    <!-- Related Products End -->


















<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});

</script>

@endsection