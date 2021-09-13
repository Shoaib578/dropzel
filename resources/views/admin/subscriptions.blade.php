@extends('admin.layout')

@section('content')

<a href="#" class="btn btn-primary float-right mr-5 mt-5" data-toggle="modal" data-target="#exampleModalCenter">Add Subscription+</a>
<br>
<br>
<br>
<br>

<center>
<table class="table" style="width:50%">
  <thead>
    <tr>
      <th scope="col">Duration Days</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
      @foreach($subscriptions as $subs)
    <tr>
      <th scope="row">{{ $subs->duration }}</th>
      <td>{{ $subs->price }}</td>
      <td>
          <a href="subscription/{{ $subs->id }}/edit" class="btn btn-primary">Edit</a>
          <a href="subscription/{{ $subs->id }}/delete" class="btn btn-danger">Delete</a>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</center>
























<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Subscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{  route('add_subscription') }}" method="post">
      @csrf
      <div class="modal-body">
          <center>
       <input type="number" class="form-control" name="duration" placeholder="Duration">
       @error('duration')
    <div class="text-red-500 mt-2 text-sm" style="color:red;">
        {{ $message }}
        </div>
        @enderror
       <br>
       <input type="number" class="form-control" name="price" placeholder="Price">
       @error('price')
        <div class="text-red-500 mt-2 text-sm" style="color:red;">
        {{ $message }}
        </div>
        @enderror
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
@endsection