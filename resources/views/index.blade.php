@include('header')

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('{{ $coverphoto }}');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>I'm  Amila Pradeep a Professional Photographer Lives in Dehiattakandiya</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-block-profile-pic" data-aos="fade" data-aos-delay="200">
      <a href="about.html"><img src="{{ $aboutphoto }}" alt="Image"></a>
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
                <p>{{ $services->description }}.</p>
              </div>
              
          </div>
       
          </div>
         @endforeach
        
   
      </div>

    </div>
  </div>

   

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2>My Photography</h2>
          </div>
        </div>

        
  

    <div class="site-section"  data-aos="fade">
    <div class="container">
       <h1>Weddings</h1>
      <div class="row" id="lightgallery">
           @foreach($album as $cover)

        <div class="row" data-aos="fade" data-src="{{$cover->newphoto}}" data-sub-html="<h4> {{$cover->photoname}}</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
          <a href="#"><img src="{{$cover->newphoto}}" alt="IMage" class="img-fluid" style="height: 200px;"></a>
        </div>
        
   @endforeach
      </div>

      

   

    </div>
  </div>
 
      </div>

    <div class="site-section"  data-aos="fade">
    <div class="container">
       <h1>Pre-shoots</h1>
      <div class="row" id="lightgalleryy">
           @foreach($albumm as $cover)

        <div class="row" data-aos="fade" data-src="{{$cover->newphoto}}" data-sub-html="<h4> {{$cover->photoname}}</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
          <a href="#"><img src="{{$cover->newphoto}}" alt="IMage" class="img-fluid" style="height: 200px;"></a>
        </div>
        
   @endforeach
      </div>
   
    </div>
  </div>
    </div>

    

@include('footer')
