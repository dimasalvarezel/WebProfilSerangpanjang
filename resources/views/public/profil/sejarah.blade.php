@extends('public.layout.app', ['title' => 'Sejarah'])

@section('meta')
  <meta name="description" content="Sejarah" />
  <meta name="keywords" content="Sejarah" />
  <meta property="og:title" content="Sejarah"/>
  <meta property="og:type" content="Sejarah"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Sejarah Sersngpanjang</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="">
        <h1 class="heading__title">Sejarah  Serangpanjang</h1>
          <p style="text-align: left; font-size: 20px">
            1. Undang-Undang Nomor  14 Tahun 1950 tentang Pembentukan Daerah-Daerah Kabupaten Dalam Lingkungan Propinsi Djawa Barat.<br>
            2. Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara.<br>
            3. Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah;<br>
            4. Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;<br>
            5. Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016, tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang;<br>
            6. Peraturan Bupati Subang Nomor 34 Tahun 2016, tentang Susunan Organisasi Perangkat Daerah Kecamatan.
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