@extends('admin.layout')

@section('content')


<br >
<br >

<a href="#" class="btn btn-primary float-right mr-5" data-toggle="modal" data-target="#exampleModal">Add+</a>


<br >
<br >

<center>
<table class="table" style="width:50%">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Image</th>

      <th scope="col">Actions</th>
     
    </tr>
  </thead>

  <tbody>
      @foreach($categories as $category)
            <tr>
            <th scope="row">{{$category->name}}</th>
            <th scope="row">
              <image src="{{ asset( 'images/'.$category->image ) }}" style="width:100px;height:100px;"/>
            </th>

            <td>
                <a href="categories/{{$category->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="categories/{{$category->id}}/delete" class="btn btn-danger">Delete</a>

            </td>
            
            
            </tr>
        @endforeach
    
  </tbody>
</table>











<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method='post' action="{{ route('categories') }}" enctype="multipart/form-data">
      @csrf

      <div class="modal-body">
      <center>

      <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Category name"  class="bg-gray-100 border-2 w-full  rounded-lg @error('name') border-red-500 @enderror form-control" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror


                    <br>

                    <br>
                    <label for="image" class="sr-only">Image</label>
                    <input type="file" name="image" id="image" placeholder="Image"  class="bg-gray-100 border-2 w-full  rounded-lg @error('name') border-red-500 @enderror form-control" value="{{ old('name') }}">

                    @error('image')
                        <div class="text-red-500 mt-2 text-sm" style="color:red;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add+</button>
      </div>

</form>
    </div>
  </div>
</div>
</center>



@endsection