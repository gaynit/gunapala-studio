@include('header')

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('{{ $coverphoto }}');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>My Photography</h1>
            
          </div>
        </div>
      </div>
    </div>

  

    <div class="site-section"  data-aos="fade">
    <div class="container">
       
      <div class="row" id="lightgalleryy">
           @foreach($album as $cover)

        <div class="row" data-aos="fade" data-src="{{$cover->newphoto}}" data-sub-html="<h4> {{$cover->photoname}}</h4><p>{{$cover->description}}</p>">
          <a href="#"><img src="{{$cover->newphoto}}" alt="IMage" class="img-fluid" style="height: 200px;"></a>
        </div>
        
   @endforeach
      </div>
   
    </div>
  </div>


@include('footer')