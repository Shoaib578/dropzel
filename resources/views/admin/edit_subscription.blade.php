@extends('admin.layout')

@section('content')

<br>
<br>
<br>

<form action="{{ route('update_subscription',$subs->id) }}" method="post">
      @csrf
      
          <center>
       <input type="number" class="form-control" value="{{ $subs->duration }}" name="duration" placeholder="Duration" style="width:50%;">
       @error('duration')
    <div class="text-red-500 mt-2 text-sm" style="color:red;">
        {{ $message }}
        </div>
        @enderror
       <br>
       <input type="number" class="form-control" value="{{ $subs->price }}" name="price" placeholder="Price" style="width:50%;">
       @error('price')
        <div class="text-red-500 mt-2 text-sm" style="color:red;">
        {{ $message }}
        </div>
        @enderror

        <br>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
       </center>
</form>

@endsection