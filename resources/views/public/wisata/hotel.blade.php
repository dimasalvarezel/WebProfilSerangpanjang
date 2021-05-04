@extends('public.layout.app', ['title' => 'Hotel'])

@section('meta')
  <meta name="description" content="Hotel" />
  <meta name="keywords" content="Hotel" />
  <meta property="og:title" content="Hotel"/>
  <meta property="og:type" content="Hotel"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
<!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
  <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Rekomendasi Hotel</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

</section><!-- /.page-title -->

<<!-- Konten -->
<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
<div class="container-fluid bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://tse1.mm.bing.net/th?id=OIP._Zv1MaRN1pjWY1BMuFRmmgHaHZ&pid" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="http://cijaluresorts.com/"
                                style="text-decoration:none;color:black;"> Cijalu Resort </a></h5>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;Jl. Curug Cijalu, Desa Cipancar Kec. Serangpanjang Subang 41288</small>
                    </div>
                </div>                     
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection


@section('top-resource')
@endsection
@section('bottom-resource')
@endsection