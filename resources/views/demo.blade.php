@extends('layout.masterlayout')
@section('homeheader')
<div class="page-banner home-banner">
   <div class="container h-100">
         {{-- <a href="{{route('about')}}">About Us</a> --}}
      <a href="{{ route('about')}}"></a>
    </div>
</div>
</header>
@endsection
