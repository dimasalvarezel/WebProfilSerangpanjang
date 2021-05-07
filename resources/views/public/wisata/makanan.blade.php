@extends('public.layout.app', ['title' => 'Rumah Makan'])

@section('meta')
  <meta name="description" content="Rumah Makan" />
  <meta name="keywords" content="Rumah Makan" />
  <meta property="og:title" content="Rumah Makan"/>
  <meta property="og:type" content="Rumah Makan"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
<!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
  <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Rumah Makan</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogGridRightSidebar" class="blog blog-grid pb-60">
<div class="container-fluid bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                                
            <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://igx.4sqi.net/img/general/100x100/9202358_g68kPeNUYwyp0PHE11KmUK9HHuThgruLtmDy-1JBYJo.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.google.com/maps/place/Sate+Maranggi+Pareang/@-6.642702,107.5627667,20z/data=!4m5!3m4!1s0x2e691bd37a191585:0x13eb7905c3b0c11d!8m2!3d-6.6442079!4d107.5677623"
                                style="text-decoration:none;color:black;">Sate Maranggi Pareang – Kiarapedes</a></h5>
                                <p>Sate Maranggi Pareang – Kiarapedes ialah Indonesian Restaurant yang terlatak 4.89 KM dari Serangpanjang, Lebih Tepatnya Bertempat di Ds. Kiarapedes Wanayasa Purwakarta Jawa Barat</p>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;</small>
                    </div>
                </div>
                                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://igx.4sqi.net/img/general/100x100/42530260_7FeksX2HgnBuQ7gSqooPegIzO5hbkKUOQYZc31v4KKc.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.google.com/maps/search/Warung+Sate+Cijengkol/@-6.6058225,107.6321547,12z/data=!3m1!4b1"
                                style="text-decoration:none;color:black;">Warung Sate Cijengkol</a></h5>
                                <p>Warung Sate Cijengkol ialah Asian Restaurant yang terlatak 4.61 KM dari Serangpanjang, Lebih Tepatnya Bertempat di cijengkol Segalaherang Jawa Barat</p>
                        <small><i
                                class="fa fa-clock"></i>&nbsp;</small>
                    </div>
                    
                </div>
                                <div class="row py-2 my-2 mr-2" style="box-shadow: 0 5px 35px 0px rgba(0,0,0,.1);">
                    <div class="list-content col-md-4 col-sm-4">
                        <img src="https://igx.4sqi.net/img/general/100x100/65081982_CMatMiZoBt5lw87DsInQ0udE4wxiQMoJwg1AYsnSVIg.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h5><a href="https://www.google.com/maps/place/Sate+Maranggi+Pareang/@-6.6442079,107.5655736,17z/data=!3m1!4b1!4m5!3m4!1s0x2e691bd37a191585:0x13eb7905c3b0c11d!8m2!3d-6.6442079!4d107.5677623"
                                style="text-decoration:none;color:black;">Sate Maranggi Pareang</a></h5>
                                <p>Sate Maranggi Pareang ialah Sundanese Restaurant yang terlatak 4.89 KM dari Serangpanjang, Lebih Tepatnya Bertempat di Ds. Kiara Pedes Serangpanjang Subang

Serangpanjang</p>
                        
                    </div>
                </div>
                                
                                <div class="row py-3 my-2">
                    <div class="col-sm-6">
                        <div id="client-paginator">
                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
            
                         
                </li>
                    </ul>
    </nav>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="py-2">
                    <h4 class="text-black text-left py-3"><span class="vl">&nbsp;BERITA TERKINI</span></h4>
                                        <div class="row shadow-sm bg-grey py-1">
                        <div class="side-content col-md-5 col-sm-5">
                            <img src="https://subang.go.id/public/backend/images/berita/20210503183555.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div>
                                <small><i
                                        class="fa fa-clock"></i>&nbsp;Senin, 03 Mei 2021</small>
                                <a href="https://subang.go.id/public/berita/pencanangan-pembangunan-zona-integritas-polres-subang-menuju-wbkwbbm"
                                    style="text-decoration:none;color:black;">Pencanangan Pembangunan Zona Integritas Polres Subang Menuju WBK/WBBM</a>
                            </div>
                        </div>
                    </div>
                                        <div class="row shadow-sm bg-grey py-1">
                        <div class="side-content col-md-5 col-sm-5">
                            <img src="https://subang.go.id/public/backend/images/berita/20210503184301.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div>
                                <small><i
                                        class="fa fa-clock"></i>&nbsp;Senin, 03 Mei 2021</small>
                                <a href="https://subang.go.id/public/berita/wakil-bupati-subang-ikuti-rakor-penegakan-prokes-dan-penanggulangan-covid-19"
                                    style="text-decoration:none;color:black;">Wakil Bupati Subang Ikuti Rakor Penegakan Prokes dan Penanggulangan Covid-19</a>
                            </div>
                        </div>
                    </div>
                                        <div class="row shadow-sm bg-grey py-1">
                        <div class="side-content col-md-5 col-sm-5">
                            <img src="https://subang.go.id/public/backend/images/berita/20210503141033.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div>
                                <small><i
                                        class="fa fa-clock"></i>&nbsp;Senin, 03 Mei 2021</small>
                                <a href="https://subang.go.id/public/berita/bazar-ramadhan-bentuk-kepedulian-pemerintah-daerah-dalam-menyemarakan-ramadhan"
                                    style="text-decoration:none;color:black;">Bazar Ramadhan Bentuk Kepedulian Pemerintah Daerah dalam Menyemarakan Ramadhan</a>
                            </div>
                        </div>
                    </div>
                                        <div class="row shadow-sm bg-grey py-1">
                        <div class="side-content col-md-5 col-sm-5">
                            <img src="https://subang.go.id/public/backend/images/berita/20210503122526.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div>
                                <small><i
                                        class="fa fa-clock"></i>&nbsp;Senin, 03 Mei 2021</small>
                                <a href="https://subang.go.id/public/berita/sekda-subang-menghadiri-kegiatan-hari-pendidikan-nasional-tahun-2021"
                                    style="text-decoration:none;color:black;">Sekda Subang Menghadiri Kegiatan Hari Pendidikan Nasional tahun 2021</a>
                            </div>
                        </div>
                    </div>
                                        <div class="row shadow-sm bg-grey py-1">
                        <div class="side-content col-md-5 col-sm-5">
                            <img src="https://subang.go.id/public/backend/images/berita/20210501192227.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div>
                                <small><i
                                        class="fa fa-clock"></i>&nbsp;Jumat, 30 April 2021</small>
                                <a href="https://subang.go.id/public/berita/bupati-subang-resmikan-masjid-jami-as-sadiyah-ciater-subang"
                                    style="text-decoration:none;color:black;">Bupati Subang Resmikan Masjid Jami As Sa&#039;diyah Ciater Subang</a>
                            </div>
                        </div>
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