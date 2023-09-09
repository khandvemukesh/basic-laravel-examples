@extends('layout.masterlayout')

@section('homeheader')
<div class="page-banner home-banner">
   <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4">Great Companies are built on great Products</h1>
            <p class="text-lg mb-5">Ignite the most powerfull growth engine you have ever built for your company</p>

            <a href="#" class="btn btn-outline border text-secondary">More Info</a>
            <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="../assets/img/bg_image_1.png" alt="">
            </div>
          </div>
        </div>
      </div>
       </div>
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