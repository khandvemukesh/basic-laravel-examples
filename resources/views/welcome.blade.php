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
       </header>
@endsection

@section('threegroups')
<main>
    <div class="page-section features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Provide financial advice by our advisor</h5>
                <p>Copywrite, blogpublic realations content translation.</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Complete solutions for global organisations</h5>
                <p>Copywrite, blogpublic realations content translation.</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="../assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5>Provide financial advice by our advisor</h5>
                <p>Copywrite, blogpublic realations content translation.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
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

@section('projectdone')
  <div class="page-section counter-section">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Total Invest</p>
            <h2>$<span class="number" data-number="816278"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Yearly Revenue</p>
            <h2>$<span class="number" data-number="216422"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Growth Ration</p>
            <h2><span class="number" data-number="73"></span>%</h2>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

@section('wereadytoserve')
<div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h2 class="title-section">We're <span class="marked">ready to</span> Serve you with best</h2>
            <div class="divider"></div>
            <p class="mb-5">We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <a href="#" class="btn btn-primary">More Details</a>
            <a href="#" class="btn btn-outline ml-2">See pricing</a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../assets/img/bg_image_3.png" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

@section('whyyouchoose')
 <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">Why Choose Us</div>
          <h2 class="title-section">Your <span class="marked">Comfort</span> is Our Priority</h2>
          <div class="divider mx-auto"></div>
        </div>
  
        <div class="row mt-5 text-center">
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>High Performance</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Friendly Prices</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>No time-confusing</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

@section('testimonials')
 <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel wow fadeInUp" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                  <div class="entry-footer">
                    <strong>Melvin Platje</strong> &mdash; <span class="text-grey">CEO Slurin Group</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                  <div class="entry-footer">
                    <strong>George Burke</strong> &mdash; <span class="text-grey">CEO Letro</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

@section('contact')
<div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h2 class="title-section">Get in Touch</h2>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>
  
            <ul class="contact-list">
              <li>
                <div class="icon"><span class="mai-map"></span></div>
                <div class="content">123 Fake Street, New York, USA</div>
              </li>
              <li>
                <div class="icon"><span class="mai-mail"></span></div>
                <div class="content"><a href="#">info@digigram.com</a></div>
              </li>
              <li>
                <div class="icon"><span class="mai-phone-portrait"></span></div>
                <div class="content"><a href="#">+00 1122 3344 55</a></div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInUp">
            <div class="subhead">Contact Us</div>
            <h2 class="title-section">Drop Us a Line</h2>
            <div class="divider"></div>
            
            <form action="#">
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Full name">
              </div>
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="py-2">
                <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Send Message</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection

@section('blog')
<div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">Our Blog</div>
          <h2 class="title-section">Read our latest <span class="marked">News</span></h2>
          <div class="divider mx-auto"></div>
        </div>
        <div class="row my-5 card-blog-row">
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="../assets/img/person/person_3.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">Sam Newman</div>
                  <a href="#" class="post-date">23 Apr 2020</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
        </div>
  
        <div class="text-center">
          <a href="blog.html" class="btn btn-outline-primary rounded-pill">Discover More</a>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>
@endsection