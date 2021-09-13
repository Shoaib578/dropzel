@extends('admin.layout')

@section('content')

<div style="display:flex;justify-content:center;">

<div class="w-8/12 bg-white p6 rounded-lg" style="width:50%;margin-top:20px;padding:10px;">
<div class="jumbotron">
    <center>
<h1>Edit Category</h1>
</center>
</div>
<form action="{{ route('update_category',$category->id) }}" method="post">

                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Category name" value="{{$category->name}}" class="bg-gray-100 border-2 w-full  rounded-lg @error('name') border-red-500 @enderror form-control" value="{{ old('name') }}">

                    @error('name')
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