@include('header')


    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('{{ $coverphoto }}');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>My Services</h1>
          </div>
        </div>
      </div>
    </div>

  

    <div class="site-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-12 " data-aos="fade-up">
              <h2 class="site-section-heading text-center">My Specialties</h2>
            </div>
        </div>
         
 <div class="row">
   @foreach($services as $services)
  <div class="col-md-6">
             
            <div class="site-block-half d-lg-flex" data-aos="fade-up" data-aos-delay="100">
       <div class="image" style="background-image: url('{{ $services->servicephoto }}'); height: 200px;"></div>
              <div class="text">
                <h3>{{ $services->name }}</h3>
                {!! $services->description !!}
              </div>
              
          </div>
       
          </div>
         @endforeach
        
   
      </div>

    </div>
  </div>





























 @include('footer')