@extends('public.layout.app', ['title' => 'Visi Misi'])

@section('meta')
  <meta name="description" content="Visi Misi" />
  <meta name="keywords" content="Visi Misi" />
  <meta property="og:title" content="Visi Misi"/>
  <meta property="og:type" content="Visi Misi"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Visi Misi</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="">
                <h1 class="heading__title">Visi Misi</h1>
                    <p style="text-align: left; font-size: 20px">
                    1. Mewujudkan pemerintahan yang bersih dari korupsi, kolusi dan nepotisme, terbuka, serta pelayanan masyarakat; <br>
                    2. Meningkatkan Pembangunan Infrastruktur, penataan ruang berkarakter kebudayaan lokal dan pemerataan pembangunan perdesaan; <br>
                    3. Meningkatkan kualitas pendidikan untuk menciptakan sumber daya manusia yang handal dan berdaya saing serta perluasan lapangan kerja; <br>
                    4. Meningkatnya kesejahteraan masyarakat melalui pembangunan bidang pertanian, ekonomi kerakyatan, industri kreatif, perikanan dan kelautan, serta pengalian potensi berbasis budaya dan kearifan lokal; <br>
                    5. Meningkatkan kualitas layanan kesehatan masyarakat dan lingkungan hidup. 
                    </p>
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