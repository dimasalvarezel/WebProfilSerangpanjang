@extends('public.layout.app', ['title' => 'Topografi'])

@section('meta')
  <meta name="description" content="Topografi" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Topografi"/>
  <meta property="og:type" content="Topografi"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Topografi</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="">
                    <h1 class="heading__title">Topografi Wilayah Serangpanjang</h1>
                        <p style="text-align: left; font-size: 20px">
                            Kecamatan Serangpanjang terletak di daerah pegunungan, pada ketinggian 600–1000 m dpl.
                        </p>
                        <p style="text-align: left; font-size: 20px">
                            Adapun batas-batas wilayah secara geografis adalah sebagai berikut:
                        </p>
                        <p style="text-align: left; font-size: 20px; margin-left: 1.0cm">
                            Sebelah Utara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kecamatan Dawuan <br>
                            Sebelah Timur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kecamatan Sagalaherang <br>
                            Sebelah Selatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kabupaten Bandung Barat <br>
                            Sebelah Barat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kabupaten Purwakarta
                        </p>
                        <p style="text-align: left; font-size: 20px">
                            Luas Wilayah Kecamatan Serangpanjang adalah 1.311.844 km²
                        </p>
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
