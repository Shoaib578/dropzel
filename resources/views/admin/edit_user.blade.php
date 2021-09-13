@extends('admin.layout')

@section('content')

<div style="display:flex;justify-content:center;">

<div class="w-8/12 bg-white p6 rounded-lg" style="width:50%;margin-top:20px;padding:10px;">

@if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center" style="background-color:red;color:white;">
                    {{ session('status') }}
                </div>
            @endif
<div class="jumbotron">
    <center>
<h1>Edit</h1>
</center>
</div>

<form action="{{ route('update_user',$user->id) }}" method="post">

                @csrf
             

              

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full  rounded-lg @error('email') border-red-500 @enderror form-control" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" value="{{$user->name}}" id="name" placeholder="Your name"  class="bg-gray-100 border-2 w-full  rounded-lg @error('name') border-red-500 @enderror form-control" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full  rounded-lg @error('password') border-red-500 @enderror form-control" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

             

                <center>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                </center>
            </form>

           
</div>
</div>
@endsection