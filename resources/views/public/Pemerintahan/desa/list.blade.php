@extends('public.layout.app', ['title' => 'Desa'])

@section('meta')
  <meta name="description" content="Desa" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Desa"/>
  <meta property="og:type" content="Desa"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Desa</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="list-group">
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://3.bp.blogspot.com/-f905CE-krao/WXAhpwKHaMI/AAAAAAAAdzY/f3nOWjnn3-YgeeRHSYIRls5Et56Hmj4MgCLcBGAs/s1600/a-Kantor%2BDesa%2BCijengkol%2BSerangpanjang%2B-%2BMANGYONOcom.jpg" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cijengkol</h5>
                  </div>
                  <p class="mb-1">
                    Desa Cijengkol Kecamatan Serangpanjang Kabupaten subang adalah salah satu desa di daerah selatan subang yang memiliki luas wilayah sebesar 854,45 Ha/m2. Luas wilayah ini dibagi menjadi 4 dusun dengan jumlah Kepala Keluarga sebanyak 1667 (sementara). Batas wilayah Desa Cijengkol sendiri di sebelah barat berbatasan dengan Desa Talagasari, lalu di sebelah Timur berbatasan dengan Desa Dayeuh Kolot, di sebelah selatan sendiri berbatasan dengan Desa Cikujang, dan di sebelah Utara berbatasan dengan Desa Cintamekar. Dari 4 Dusun tersebut terbagi menjadi 26 Rt dan 13 Rw.
                  </p>
                  <a href="https://goo.gl/maps/di6on2uiao5RMEkq5" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://3.bp.blogspot.com/-5-sGePJZAnw/WXAt53iaJpI/AAAAAAAAdzg/yAGu0IY5X9Mk0qq0AsdmcLLMLbprR4FtwCLcBGAs/w1200-h630-p-k-no-nu/a-Kantor%2BDesa%2BCikujang%2BSerangpanjang%2B-%2BMANGYONOcom.jpg" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cikujang</h5>
                  </div>
                  <p class="mb-1">
                    Cikujang adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia. Akses jalan untuk menuju Desa Cikujang, jika dari arah Bandung, bisa melalui Ciater-Jalancagak-Sagalaherang. Dari Sagalaherang sekitar 7 km. Jika dari arah Jakarta, jalur menuju Cikujang bisa melalui Purwakarta-lalu ke Wanayasa-Cijengkol, kemudian masuk dari pertigaan Ciasem.
                  </p>
                  <a href="https://goo.gl/maps/V4Rdj27gAmeopGus5" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://beritatransparansi.co.id/wp-content/uploads/2020/08/IMG-20200805-WA0009.jpg" class="image-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cintamekar</h5>
                  </div>
                  <p class="mb-1">
                    Cintamekar adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia . Wilayah Cintamekar meliputi 4 dusun, 8 RW dan 16 RT. Cintamekar merupakan salah satu desa dengan nama terunik, nama tersebut ternyata merupakan singkatan dari nama ke empat dusun yang berada di cintamekar, CI untuk Cimute, Ta untuk Tangkil, Me untuk Malingping, dan Kar untuk Karapyak. Dahulu tingkat pembangunan di Cintamekar tergolong lambat terutama dari sisi pendidikan dan ekonomi. Namun pada tahun 2003 perubahan mulai terasa di desa ini saat warganya secara swadaya mulai membangun dan mengelola pembangkit listrik Mikrohidro sebesar 120 kilowatt yang memanfaatkan aliran sungai Ciasem, dampak positif pun mulai dirasakan warga yaitu dengan mendapat manfaat lain dari masuknya listrik kerumah - rumah warga. Sebelum pemekaran Desa Cintamekar ini masuk kedalam wilayah Kecamatan Sagalaherang.
                  </p>
                  <a href="https://goo.gl/maps/LwiLvTWRowrR78Cr9" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://1.bp.blogspot.com/-scLU9p9qLEk/V43nLh_GtaI/AAAAAAAAXo8/DlM_189VGlg9bomfTahmw5xHWVVzGAoiACLcB/s1600/DESA%2Bcipancar%2Bcijalu%2B-%2Bserangpanjang%2B-%2BBLOG%2BMANG%2BYONO.jpg" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cipanjar</h5>
                  </div>
                  <p class="mb-1">
                    Cipancar adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia. Wilayah Cipancar terletak paling selatan dari kecamatan Serangpanjang, berbatasan langsung dengan desa Ponggang di utara, desa Cisarua di selatan, desa Pusaka Mulya di barat, dan desa Cikujang di Timur. Di Cipancar terdapat suatu objek wisata air terjun bernama Curug Cijalu.
                  </p>
                  <a href="https://goo.gl/maps/DkbhjXZ2x4qQtYgD9" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://1.bp.blogspot.com/-6MlBqyvYNVY/WXBSEHB9taI/AAAAAAAAdz8/f_kJiNrKh9E8sS3j0nLgUwkp1mq1_H2pACEwYBhgL/s400/a-Desa%2BPonggang%2B-a-%2BMANGYONOcom.jpg" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Ponggang</h5>
                  </div>
                  <p class="mb-1">
                  Ponggang adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia.
                  </p>
                  <a href="https://goo.gl/maps/Kv3y3YL12nCfg9xdA" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="https://talagasarionline.files.wordpress.com/2009/08/pic_4262.jpg?w=300&h=225" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Talagasari</h5>
                  </div>
                  <p class="mb-1">
                  Talagasari adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia.
                  </p>
                  <a href="https://goo.gl/maps/dLSJECpL3zZEagv59" target="_blank">Lihat Peta</a>
                </div>
              </li>            
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-wide">
              <div class="widget widget-posts">
                <h5 class="widget__title">Artikel Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($article) > 0)
                    @foreach ($article as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/article/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Agenda Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($agenda) > 0)
                    @foreach ($agenda as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/agenda/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Pengumuman Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($announcement) > 0)
                    @foreach ($announcement as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/announcement/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->

		    </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- /.End Post -->

@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
