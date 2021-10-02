@extends('Template1.master')

@section ('header')
<section>
    <div class="container-fluid p-sm-0">
      <div class="row featured-post-slider">
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/mawar.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Flowers</p>
                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">10 Bunga Paling disukai Perempuan</a></h4>
                <a class="btn btn-outline-light" href="/about">read more</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/buket.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Bucket</p>
                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">10 Desain Bucket Terlaris Terjual</a></h4>
                <a class="btn btn-outline-light" href="blog-single.html">read more</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/cake.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Cake</p>
                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">10 Kue Paling Diminati</a></h4>
                <a class="btn btn-outline-light" href="blog-single.html">read more</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{asset('asset/images/pot.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Tanaman Hias</p>
                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">10 Tanaman Hias Terindah</a></h4>
                <a class="btn btn-outline-light" href="blog-single.html">read more</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/buah.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Buah</p>
                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">10 Buah yang Paling diminati</a></h4>
                <a class="btn btn-outline-light" href="blog-single.html">read more</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /featured post -->

  <!-- blog post -->
  <section class="section">
    <div class="container">
      <div class="row masonry-container">
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-1.jpg')}}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-2.jpg')}}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-3.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-4.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-5.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-6.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-7.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-8.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/masonary-post/post-9.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-10.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-11.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-13.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/masonary-post/post-12.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">TRAVEL</p>
            <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <a href="blog-single.html" class="btn btn-transparent">read more</a>
          </article>
        </div>
      </div>

@endsection()

@section('content')

@endsection()
