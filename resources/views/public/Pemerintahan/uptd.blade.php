@extends('public.layout.app', ['title' => 'UPTD'])

@section('meta')
  <meta name="description" content="UPTD" />
  <meta name="keywords" content="UPTD" />
  <meta property="og:title" content="UPTD"/>
  <meta property="og:type" content="UPTD"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">UPTD  Kecamatan Serangpanjang</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-15 col-md-12 col-lg-12">
            <div class="list-group">
              <div>
                <li class="list-group-item list-group-item-action">
                  <h5 class="mb-3">UPTD Pertanian</h5>
                  <div class="ms-10 me-auto">
                    <p class="mb-1">
                      Alamat : Ponggang, Serangpanjang, Kabupaten Subang, Jawa Barat 41282<br>
                    </p>
                    <a href="https://goo.gl/maps/TcvCEoSE4YGStUPD7" target="_blank">Lihat di Peta</a>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action">
                  <h5 class="mb-3">UPTD Dinas Pendidikan</h5>
                  <div class="ms-2 me-auto">
                    <p class="mb-1">
                      Alamat : Ponggang, Serangpanjang, Ponggang, Subang, Kabupaten Subang, Jawa Barat 41282<br>
                    </p>
                    <a href="https://goo.gl/maps/8SRtg2pD6ua8T9TW8">Lihat di Peta</a>    
                  </div>
                </li>
              </div>
            </div>
          </div>
</section>
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection