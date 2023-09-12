@extends('layout.masterlayout')


@section('homeheader')
<div class="page-banner home-banner">
   <div class="container h-100">
        <div class="row align-items-center h-100">
       
      <br/>
      <h1>mukesh - {{ $id }}</h1>
        </div>
      </div>
       </div>
       </header>
@endsection
      

@section('dynamicteam')
 <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../assets/img/bg_image_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People</h2>
            <div class="divider"></div>
            <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <div class="img-place mb-3">
              <img src="../assets/img/testi_image.png" alt="">
            </div>
            <a href="#" class="btn btn-primary">More Details</a>
            <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection