@extends('layouts.app')

@section('content')


<style>
    // Full tutorial coming soon!

.card {
  --card-gradient: rgba(0, 0, 0, 0.8);
  --card-gradient: #5e9ad9, #e271ad;
  // --card-gradient: tomato, orange;
  --card-blend-mode: overlay;
  // --card-blend-mode: multiply;

  background-color: #fff;
  border-radius: 0.5rem;
  box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
  padding-bottom: 1rem;
  background-image: linear-gradient(
    var(--card-gradient),
    white max(9.5rem, 27vh)
  );
  overflow: hidden;

  img {
    border-radius: 0.5rem 0.5rem 0 0;
    width: 100%;
    object-fit: cover;
    // height: max(10rem, 25vh);
    max-height: max(10rem, 30vh);
    aspect-ratio: 4/3;
    mix-blend-mode: var(--card-blend-mode);
    // filter: grayscale(100);

    ~ * {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  }

  > :last-child {
    margin-bottom: 0;
  }

  &:hover,
  &:focus-within {
    --card-gradient: #24a9d5 max(8.5rem, 20vh);
  }
}

/* Additional demo display styles */
* {
  box-sizing: border-box;
}


.card h3 {
  margin-top: 1rem;
  font-size: 1.25rem;
}

.card a {
  color: inherit;
}

.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 1.5rem;
  max-width: 100vw;
  width: 120ch;
  padding-left: 1rem;
  padding-right: 1rem;
}

</style>


<br>
<br>

<center>


<ul class="card-wrapper">
  @foreach($list_subscriptions as $subs)
        <li class="card">
            <br>
            <br>

            <h2>Subscription</h2>
            <h4>Price ${{$subs->price}}</h4>
        <hr>
        <h3>For {{$subs->duration}} Days</h3>
            <p>You can explore everything here</p>

            <br>
            <br>
            <br>
            <br>
            <center>
            <a href="#" class="btn btn-primary" style="width:80%">Buy Now</a>

            </center>

            <br>
            <br>
        </li>
    @endforeach
  
</ul>
</center>

@endsection