@extends('public.layout.app', ['title' => 'Profil Desa'])

@section('meta')
  <meta name="description" content="Profil Desa" />
  <meta name="keywords" content="Profil Desa" />
  <meta property="og:title" content="Profil Desa"/>
  <meta property="og:type" content="Profil Desa"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Profil Desa</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="">
                <h1 class="heading__title">Profil Desa Serangpanjang</h1>
                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://3.bp.blogspot.com/-f905CE-krao/WXAhpwKHaMI/AAAAAAAAdzY/f3nOWjnn3-YgeeRHSYIRls5Et56Hmj4MgCLcBGAs/s1600/a-Kantor%2BDesa%2BCijengkol%2BSerangpanjang%2B-%2BMANGYONOcom.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2017/07/desa-cijengkol-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;">Cijengkol, Serangpanjang, Subang</a></h5>
                                <p> Desa Cijengkol Kecamatan Serangpanjang Kabupaten subang adalah salah satu desa di daerah selatan subang yang memiliki luas wilayah sebesar 854,45 Ha/m2. Luas wilayah ini dibagi menjadi 4 dusun dengan jumlah Kepala Keluarga sebanyak 1667 (sementara). Batas wilayah Desa Cijengkol sendiri di sebelah barat berbatasan dengan Desa Talagasari, lalu di sebelah Timur berbatasan dengan Desa Dayeuh Kolot, di sebelah selatan sendiri berbatasan dengan Desa Cikujang, dan di sebelah Utara berbatasan dengan Desa Cintamekar.</p>
                    </div>
                </div>
                                <div class="row py-3 my-2">
                    <div class="col-sm-6">
                        <div id="client-paginator">
                        
                        </div>
                    </div>
                    <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://3.bp.blogspot.com/-5-sGePJZAnw/WXAt53iaJpI/AAAAAAAAdzg/yAGu0IY5X9Mk0qq0AsdmcLLMLbprR4FtwCLcBGAs/w1200-h630-p-k-no-nu/a-Kantor%2BDesa%2BCikujang%2BSerangpanjang%2B-%2BMANGYONOcom.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2017/07/desa-cikujang-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;">Cikujang, Serangpanjang, Subang</a></h5>
                                <p>Cikujang adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia. Akses jalan untuk menuju Desa Cikujang, jika dari arah Bandung, bisa melalui Ciater-Jalancagak-Sagalaherang. Dari Sagalaherang sekitar 7 km. Jika dari arah Jakarta, jalur menuju Cikujang bisa melalui Purwakarta-lalu ke Wanayasa-Cijengkol, kemudian masuk dari pertigaan Ciasem.</p>
                    </div>
                </div>

                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://beritatransparansi.co.id/wp-content/uploads/2020/08/IMG-20200805-WA0009.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2017/07/desa-cintamekar-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;">Cintamekar, Serangpanjang, Subang</a></h5>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;Cintamekar adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia . Wilayah Cintamekar meliputi 4 dusun, 8 RW dan 16 RT. Cintamekar merupakan salah satu desa dengan nama terunik, nama tersebut ternyata merupakan singkatan dari nama ke empat dusun yang berada di cintamekar, CI untuk Cimute, Ta untuk Tangkil, Me untuk Malingping, dan Kar untuk Karapyak. Dahulu tingkat pembangunan di Cintamekar tergolong lambat terutama dari sisi pendidikan dan ekonomi.</small>
                    </div>
                </div>

                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://1.bp.blogspot.com/-scLU9p9qLEk/V43nLh_GtaI/AAAAAAAAXo8/DlM_189VGlg9bomfTahmw5xHWVVzGAoiACLcB/s1600/DESA%2Bcipancar%2Bcijalu%2B-%2Bserangpanjang%2B-%2BBLOG%2BMANG%2BYONO.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2016/07/desa-cipancar-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;"> Cipancar, Serangpanjang, Subang </a></h5>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;Cipancar adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia. Wilayah Cipancar terletak paling selatan dari kecamatan Serangpanjang, berbatasan langsung dengan desa Ponggang di utara, desa Cisarua di selatan, desa Pusaka Mulya di barat, dan desa Cikujang di Timur. Di Cipancar terdapat suatu objek wisata air terjun bernama Curug Cijalu.</small>
                    </div>
                </div>

                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://1.bp.blogspot.com/-wdPQ3PieuNM/WXBSEXfxG5I/AAAAAAAAd0A/KLmkLC91CC45FOY6wqE68iAwsEvyxECJwCLcBGAs/s400/a-Desa%2BPonggang%2B-1a-%2BMANGYONOcom.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2016/07/desa-cipancar-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;"> Ponggang, Serangpanjang, Subang </a></h5>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;Desa Ponggang yang terletak +  1 Km ke arah selatan dari Kecamatan Serang Panjang. Sedangkan untuk menuju Kota Subang, harus menempuh perjalanan antara 30 menit hingga 1 jam. Desa Ponggang Kecamatan Serang Panjang berada di ketinggian 8,62 mdl diatas permukaan laut dengan wilayah ± 141 Hektar. Suhu rata-rata harian di Desa Ponggang adalah 20-30 oC.</small>
                    </div>
                </div>

                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://korantangerang.com/wp-content/uploads/2020/08/Dampak-Positif-Bagi-Percepatan-Pengembangan-Pembangunan-Desa-Dari-Karya-TMMD-Ke-108-768x419.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.mangyono.com/2017/07/desa-talagasari-kecamatan-serang-panjang.html"
                                style="text-decoration:none;color:black;"> Talagasari, Serangpanjang, Subang </a></h5>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;Talagasari adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia.</small>
                    </div>
                </div>
                                <div class="row py-3 my-2">
                    <div class="col-sm-6">
                        <div id="client-paginator">
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