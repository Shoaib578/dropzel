@extends('admin.layout')

@section('content')
<div style="display:flex;justify-content:center;">

<div class="w-8/12 bg-white p6 rounded-lg" style="width:50%;margin-top:20px;padding:10px;">



<div class="jumbotron">

    <center>
<h1>Add Product</h1>
</center>
</div>


<form action="{{ route('add_product') }}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

               

                <div class="mb-4">
                    <label for="content" class="sr-only">Content</label>
                    <textarea name="content"  class="form-control"cols="30" rows="10">Content...</textarea>

                    @error('content')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                Product Images

                <div class="mb-4">
                    
                    <input type="file" name="product_image1" id="product_image1"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('product_image1')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    
                    <input type="file" name="product_image2" id="product_image2"  class="bg-gray-100 border-2 w-full  rounded-lg @error('product_image2') border-red-500 @enderror form-control" >

                    
                </div>




                <div class="mb-4">
                    
                    <input type="file" name="product_image3" id="product_image3"  class="bg-gray-100 border-2 w-full  rounded-lg @error('product_image3') border-red-500 @enderror form-control" >

                    @error('product_image3')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    
                    <input type="file" name="product_image4" id="product_image4"  class="bg-gray-100 border-2 w-full  rounded-lg @error('product_image4') border-red-500 @enderror form-control" >

                    @error('product_image4')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                  
                    <input type="file" name="product_image5" id="product_image1"  class="bg-gray-100 border-2 w-full  rounded-lg @error('product_image5') border-red-500 @enderror form-control" >

                    @error('product_image5')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

           


                <div class="mb-4">
                    <label for="name" class="sr-only">Link</label>
                    <input type="text" name="link" id="link" placeholder="link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('link') border-red-500 @enderror form-control" >

                    @error('link')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                Category
                    <div class="mb-4">
                    <label for="name" class="sr-only">Category</label>
                    <select class="form-control" name="category" aria-label="Default select example">
                        <option selected value="">Select Category Please</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{$category->name  }}</option>
                           
                        @endforeach
                        </select>

                    @error('category')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    <label for="selling_price" class="sr-only">selling price</label>
                    <input type="number" name="selling_price" id="selling_price" placeholder="selling price"  class="bg-gray-100 border-2 w-full  rounded-lg @error('selling_price') border-red-500 @enderror form-control" >

                    @error('selling_price')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="profit_margin" class="sr-only">profit margin</label>
                    <input type="number" name="profit_margin" id="profit_margin" placeholder="profit margin"  class="bg-gray-100 border-2 w-full  rounded-lg @error('selling_price') border-red-500 @enderror form-control" >

                    @error('profit_margin')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="product_cost" class="sr-only">product cost</label>
                    <input type="number" name="product_cost" id="product_cost" placeholder="product cost"  class="bg-gray-100 border-2 w-full  rounded-lg @error('product_cost') border-red-500 @enderror form-control" >

                    @error('product_cost')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="saturation" class="sr-only">saturation</label>
                    <input type="number" name="saturation" id="saturation" placeholder="saturation"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    @error('saturation')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                Influencers


                <br>




                <hr>

                <div class="border border-secondary">
                    
                Influencer1
                
                
                <div class="mb-4">
                    <label for="name" class="sr-only">influencer1</label>
                    
                    <input type="text" name="influencer1"  placeholder="influencer1"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer1_image</label>
                    
                    <input type="file" name="influencer1_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer1_link</label>
                    
                    <input type="text" name="influencer1_link"  placeholder="influencer1_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>



                Influencer2

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer2</label>
                    
                    <input type="text" name="influencer2"  placeholder="influencer2"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer2_image</label>
                    
                    <input type="file" name="influencer2_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer2_link</label>
                    
                    <input type="text" name="influencer2_link"  placeholder="influencer2_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>

                
                Influencer3

                <div class="mb-4">
                    <label for="name"  class="sr-only">influencer3</label>
                    
                    <input type="text"  name="influencer3"  placeholder="influencer3"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer3_image</label>
                    
                    <input type="file"  name="influencer3_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer3_link</label>
                    
                    <input type="text"   name="influencer3_link"  placeholder="influencer3_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                Influencer4

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer4</label>
                    
                    <input type="text" name="influencer4"  placeholder="influencer4"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control">

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer4_image</label>
                    
                    <input type="file" name="influencer4_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer4_link</label>
                    
                    <input type="text" name="influencer4_link"  placeholder="influencer4_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>





                Influencer5

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer5</label>
                    
                    <input type="text" name="influencer5"  placeholder="influencer5"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer5_image</label>
                    
                    <input type="file" name="influencer5_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer5_link</label>
                    
                    <input type="text" name="influencer5_link"  placeholder="influencer5_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>






                Influencer6

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer6</label>
                    
                    <input type="text" name="influencer6"  placeholder="influencer6"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer6_image</label>
                    
                    <input type="file" name="influencer6_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer6_link</label>
                    
                    <input type="text" name="influencer6_link"  placeholder="influencer6_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>




                Influencer7

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer7</label>
                    
                    <input type="text" name="influencer7"  placeholder="influencer7"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer7_image</label>
                    
                    <input type="file" name="influencer7_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer7_link</label>
                    
                    <input type="text" name="influencer7_link"  placeholder="influencer7_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>



                Influencer8

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer8</label>
                    
                    <input type="text" name="influencer8"  placeholder="influencer8"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer8_image</label>
                    
                    <input type="file" name="influencer8_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer8_link</label>
                    
                    <input type="text" name="influencer8_link"  placeholder="influencer8_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>



                Influencer9

                <div class="mb-4">
                    <label for="name" class="sr-only">influencer9</label>
                    
                    <input type="text" name="influencer9"  placeholder="influencer9"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer9_image</label>
                    
                    <input type="file" name="influencer9_image"   class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">influencer9_link</label>
                    
                    <input type="text" name="influencer9_link"  placeholder="influencer9_link"  class="bg-gray-100 border-2 w-full  rounded-lg @error('saturation') border-red-500 @enderror form-control" >

                    
               
                </div>
                </div>


                <br>


                <div class="mb-4">
                    <label for="name" class="sr-only">CPA</label>
                    <input type="number" name="cpa" step="0.01" id="title" placeholder="CPA"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('cpa')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <br>


                <div class="mb-4">
                    <label for="name" class="sr-only">NET</label>
                    <input type="number" step="0.01" name="net" id="net" placeholder="NET"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('net')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    <label for="name" class="sr-only">Source</label>
                    <input type="text"  name="source" id="source" placeholder="source"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('source')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    <label for="name" class="sr-only">Orders</label>
                    <input type="number" step="0.01" name="orders" id="orders" placeholder="Orders"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('orders')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>





                <div class="mb-4">
                    <label for="name" class="sr-only">votes</label>
                    <input type="number" step="0.01" name="votes" id="orders" placeholder="votes"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('votes')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">reviews</label>
                    <input type="number" step="0.01" name="reviews" id="reviews" placeholder="reviews"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('reviews')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    <label for="name" class="sr-only">rating</label>
                    <input type="number" step="0.01" name="rating" id="rating" placeholder="rating"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('rating')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>






                <div class="mb-4">
                    <label for="name" class="sr-only">Likes</label>
                    <input type="number" step="0.01" name="likes" id="likes" placeholder="likes"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('likes')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="name" class="sr-only">comments</label>
                    <input type="number" step="0.01" name="comments" id="comments" placeholder="comments"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('comments')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="name" class="sr-only">shares</label>
                    <input type="number" step="0.01" name="shares" id="shares" placeholder="shares"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('shares')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="mb-4">
                    <label for="name" class="sr-only">reactions</label>
                    <input type="number" step="0.01" name="reactions" id="reactions" placeholder="reactions"  class="bg-gray-100 border-2 w-full  rounded-lg @error('title') border-red-500 @enderror form-control" >

                    @error('reactions')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>








                
                <center>
                <div>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

                </center>
            </form>

            
</div>
</div>

@endsection