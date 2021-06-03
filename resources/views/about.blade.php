@include('header')


    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('{{ $coverphoto }}');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>About Me</h1>
          </div>
        </div>
      </div>
    </div>

  

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-6  mb-5">
              <img src="{{ $aboutphoto }}" alt="Images" class="img-fluid">
            </div>
            <div class="col-md-5 ml-auto">
              <h3 class="text-black mb-3">{{ $aboutheader }}</h3>
              <p>{{ $abouttext }}</p>
              <p>
                <a href="#" class="pr-2"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
              </p>
            </div>
          </div>
      </div>
    </div>

    <div class="site-section pt-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <h2 class="text-black">My Skills</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2 class="h5">Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">97%</div>
            </div>
            <h2 class="h5">Video Editing</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">89%</div>
            </div>
            <h2 class="h5">Wedding Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%</div>
            </div>
            <h2 class="h5">Macro Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
            </div>
          </div>
        </div>
      </div>
    </div>

 

@include('footer')