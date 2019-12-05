<!DOCTYPE html>
<html>
<head>

    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta name='google' content='notranslate' />
    <meta name='theme' content='batudaa' />
    <meta name='theme:version' content='1.1.1' />
    <meta name='theme:url' content='http://github.com/batudaa/batudaa-theme' />
    <meta name='keywords' content="sid, sistem informasi desa, web, blog, informasi, website, batudaa, desa, kecamatan, kabupaten, indonesia" />
    <meta property="og:site_name" content="{{ setting()->village_name }}" />
    <meta property="og:type" content="article" />
    <title>Website Resmi Gampong {{ setting()->village_name }}</title>
    <meta name='description' content="Website Resmi Gampong{{ setting()->village_name }}" />
    <meta property="og:title" content="{{ setting()->village_name }}" />
    <meta property='og:description' content="Website Resmi Gampong {{ setting()->village_name }}" />
    <meta property='og:url' content="https://negari.desa.id/index.php/first" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('logo.jpeg')}}" />
	
    <link type='text/css' href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' />
    <link type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel='stylesheet' />
    <link type='text/css' href='{{ asset('batudaa/vendor/fancybox/jquery.fancybox.css')}}' rel='stylesheet' />
    <link type='text/css' href='{{ asset('batudaa/assets/css/batudaa.css')}}' rel='stylesheet' />
    <script language='javascript' src="{{ asset('js/app.js')}}"></script>
    <script language='javascript' src="{{ asset('/bootstrap/js/bootstrap.js')}}"></script>
    <script language='javascript' src='{{ asset('batudaa/vendor/fancybox/jquery.fancybox.js')}}'></script>
    <script language='javascript' src="https://negari.desa.id/assets/js/jquery.cycle2.min.js"></script>
    <script language='javascript' src="https://negari.desa.id/assets/js/jquery.cycle2.carousel.js"></script>
    <script language='javascript' src='{{ asset('batudaa/assets/js/batudaa.js')}}'></script>
</head>

<body>

    <div class='navbar navbar-default navbar-fixed-top'>
        <div class='container'>

            <div class='navbar-header'>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/"><img src="{{ asset('logo.jpeg')}}" class='hidden-xs'></a>
                <a class='navbar-brand with-subbrand' href="/">
                     <div> 
        <div class='title hidden-sm'>GAMPONG {{ setting()->village_name }}</div>
                        
        <div class='sub-title hidden-xs hidden-sm'><span class='web-title-kecamatan'>KEC.</span> {{ 
          setting()->district_name}}, {{ setting()->regency_name}}</div>
                    </div>
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-form ">
                    <form id='formSearch' method='get' action="/">
                        <div class="form-group">
                            <div class="input-group">
                                <input type='text' class='form-control' placeholder="Pencarian..." name='cari' value="">
                                <span class="input-group-btn">
								<button type='submit' class='btn btn-default'><i class='fa fa-search'></i></button>
							</span>
                            </div>
                        </div>
                    </form>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class='$item[status]'>{{ link_to('/','Home')}}</li>
                  
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile 
  Gampong<i class='fa fa-angle-down'></i></a> 
  <ul class="dropdown-menu">
    <li>{{ link_to('laporan-keuangan-pendapatan','Visi & Misi')}}</li>
    <li>{{ link_to('laporan-keuangan-realisasi','Sejarah Gampong')}}</li>
    <li>{{ link_to('laporan-keuangan-pendapatan','Wilayah Gampong')}}</li>
    <li>{{ link_to('pengurus-desa','Perangkat Gampong')}}</li>
  </ul>
</li>
                    </li>
					
<ul class="nav navbar-nav navbar-right">
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
    Usahaa Masyarakat<i class='fa fa-angle-down'></i></a> 
    <ul class="dropdown-menu">
      <li><a href="/artikel/sejarah-desa">Kelompok Tani</a></li>
      <li><a href="/artikel/profile-wilayah-desa">Kelompok Tani Pengolahan Air</a></li>
      <li><a href="#">Kelompok Tani Peternak</a></li>
    </ul>
  </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lembaga Gampong <i class='fa fa-angle-down'></i></a> 
    <ul class="dropdown-menu">
      <li><a href="/artikel/sejarah-desa">Kepemudaan</a></li>
      <li><a href="/artikel/profile-wilayah-desa">Karang taruna</a></li>
      <li><a href="#">PKK</a></li>
    </ul>
  </li>
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data 
    Penduduk<i class='fa fa-angle-down'></i></a> 
    <ul class="dropdown-menu">
      <li>{{ link_to('data-pendidikan-dalam-kk','Data Pendidikan Dalam KK')}}</li>
      <li>{{ link_to('data-pekerjaan-dalam-kk','Data Pekerjaan Dalam KK')}}</li>
      <li>{{ link_to('data-jk-dalam-kk','Data Jenis Kelamin Dalam KK')}}</li>
      <li>{{ link_to('data-umur-dalam-kk','Data Kelompok Umur Dalam KK')}}</li>
      <li>{{ link_to('data-perkawinan-dalam-kk','Data Perkawinan Dalam KK')}}</li>
    </ul>
  </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Transparansi 
    Keuangan <i class='fa fa-angle-down'></i></a> 
    <ul class="dropdown-menu">
      <li>{{ link_to('laporan-keuangan-pendapatan','Pendapatan')}}</li>
      <li>{{ link_to('laporan-keuangan-realisasi','Realisasi Penggunaan')}}</li>
    </ul>
  </li>
  <li class='hidden-xs'><a href='javascript:void(0)' id='btnSearch' class=""><i class='fa fa-search'></i></a></li>
</ul>

            </div>
            <!-- #navbar -->

        </div>
        <!-- .container -->
    </div>

    <div id='lunggongo'></div>
    <div class="luncuran-box">
        <div>
            <div>
                <div id=luncuran class='carousel slide'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#luncuran' data-slide-to="0" class='active'></li>
                        <li data-target='#luncuran' data-slide-to="1"></li>
                        <li data-target='#luncuran' data-slide-to="2"></li>
                        <li data-target='#luncuran' data-slide-to="3"></li>
                        <li data-target='#luncuran' data-slide-to="4"></li>
                        <li data-target='#luncuran' data-slide-to="5"></li>
                        <li data-target='#luncuran' data-slide-to="6"></li>
                        <li data-target='#luncuran' data-slide-to="7"></li>
                        <li data-target='#luncuran' data-slide-to="8"></li>
                        <li data-target='#luncuran' data-slide-to="9"></li>
                    </ol>
                    <div class='carousel-inner' style="height:400px">

                        <?php
                        $artikel = \DB::table('artikel')->take(1)->get();
                        ?>
                        @foreach($artikel as $ar)
                        <div class='item active'>
                            <img src="{{ asset('img_artikel/'.$ar->gambar)}}" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>{{ $ar->judul}}</h2>
                                    <div class='hidden-xs'><a href='/artikel/{{ $ar->slug }}' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <?php
                        $artikel = \DB::table('artikel')->take(9)->offset(1)->get();
                        ?>
                        @foreach($artikel as $ar)
                        <div class='item '>
                            <img src="{{ asset('img_artikel/'.$ar->gambar)}}" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>{{ $ar->judul}}</h2>
                                    <div class='hidden-xs'><a href='/artikel/{{ $ar->slug }}' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#luncuran" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#luncuran" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#marquee').on('cycle-initialized', function(event, opts) {
                $('div.marquee-box').removeClass('hide');
            });
            $('#marquee').cycle({
                fx: 'carousel',
                speed: 20000,
                timeout: '10',
                easing: 'linear',
                pauseOnHover: true,
                slides: '> span',
                throttleSpeed: true
            });
        });
    </script>

    <div class='marquee-box hide'>
        
  <div id="marquee"> <span>SELAMAT DATANG DI WEBSITE RESMI GAMPONG {{ setting()->village_name }}, {{ 
          setting()->district_name}}, {{ setting()->regency_name}} SEBAGAI MEDIA KOMUNIKASI, INFORMASI SERTA TRANSPARANSI PEMERINTAH GAMPONG UNTUK MASYARAKAT.</span> <span>&nbsp;</span> </div>
    </div>
    <script language='javascript'>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 10000, // 10 detik
            });
        });
    </script>

    <div id='batanga'>
        <div class='container'>
            <div class='row mt20'>
                @yield('content')
                <div class='col-md-4'>

                    <!-- Daftar Widget disebelah kanan -->

                    <div class='btd-right-menu'>
                        <div class='row'>
                           
                            <div class='col-sm-6 col-md-12'>
                                <div class='list-frame'>
                                    <div class='list-view'>
                                        <h3 class='title'><span>Peta Gampong</span></h3>
                                        <div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15893.298864840483!2d96.10232861480485!3d5.211570039495705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040bcd8bcfd5a07%3A0x72867f38b6bfc0e5!2sMns%20Blang%20Sukon%2C%20Bandar%20Baru%2C%20Kabupaten%20Pidie%20Jaya%2C%20Aceh!5e0!3m2!1sid!2sid!4v1574777153429!5m2!1sid!2sid"        
											 width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            {{--  <div class='col-sm-6 col-md-12'>
                                <!-- widget Statistik -->

                                <div class="box box-info box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="https://negari.desa.id/index.php/first/statistik/1"><i class="fa fa-bar-chart"></i> Statistik Negari</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <script type="text/javascript">
                                            $(function() {
                                                var chart_widget;
                                                $(document).ready(function() {
                                                    // Build the chart
                                                    chart_widget = new Highcharts.Chart({
                                                        chart: {
                                                            renderTo: 'container_widget',
                                                            plotBackgroundColor: null,
                                                            plotBorderWidth: null,
                                                            plotShadow: false
                                                        },
                                                        title: {
                                                            text: 'Statistik Penduduk'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Jumlah'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        plotOptions: {
                                                            series: {
                                                                colorByPoint: true
                                                            },
                                                            column: {
                                                                pointPadding: 0,
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            type: 'column',
                                                            name: 'Populasi',
                                                            data: [
                                                                ['LAKI-LAKI', 1521],
                                                                ['PEREMPUAN', 1509],
                                                                ['TOTAL', 3030],
                                                            ]
                                                        }]
                                                    });
                                                });

                                            });
                                        </script>
                                        <script src="https://negari.desa.id//assets/js/highcharts/highcharts.js"></script>
                                        <div id="container_widget" style="width: 100%; height: 150px; margin: 0 auto"></div>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>  --}}
        
                            <div class='col-sm-6 col-md-12'>
                                <link type='text/css' href="https://negari.desa.id/assets/css/slider.css" rel='Stylesheet' />
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#aparatur_desa').cycle({
                                            pauseOnHover: true,
                                            // Untuk menghilangkan titik-titik di cycle pager
                                            pagerTemplate: '<span></span>'
                                        });
                                    });
                                </script>
                                <style type="text/css">
                                    #aparatur_desa img {
                                        width: 100%;
                                        height: 400;
                                    }
                                    
                                    #aparatur_desa .cycle-pager span {
                                        height: 7px;
                                        width: 7px;
                                        margin: 0 3px;
                                    }
                                </style>

                                <!-- widget Aparatur Desa -->
                                <div class="box box-warning box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-user"></i> Perangkat Gampong</h3>
                                    </div>
                                    <div class="box-body">

                                        <div id="aparatur_desa">
                                            <span class="cycle-pager"></span>
                                            <!-- Untuk membuat tanda bulat atau link pada slider -->
                                            <?php
                                             $perangkat = \DB::table('penjabat_desa')->leftJoin('penduduk','penduduk.nik','penjabat_desa.nik')->get();
                                             foreach($perangkat as $p)
                                             {

                                                 echo " <img src=".asset('foto_penduduk/'.$p->foto)." alt='Perbekel Desa'>";
                                             }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>

                            


                            <div class='clearfix visible-sm'></div>
            
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Arsip Artikel -->

                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="#"><i class="fa fa-archive"></i> Artikel Terbaru</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <ul id="ul-menu">
                                            <?php
                                            $artikel = \DB::table('artikel')->take(5)->get();
                                            foreach($artikel as $a)
                                            {
                                                echo "<li><a href='/artikel/".$a->slug."'>".$a->judul."</a></li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>

                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Arsip Artikel -->

                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="#"><i class="fa fa-archive"></i> File Terbaru</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <ul id="ul-menu">
                                            <?php
                                            $artikel = \DB::table('arsip')->take(5)->get();
                                            foreach($artikel as $a)
                                            {
                                                echo "<li><a target='new tab' href='".asset('nama_file/'.$a->nama_file)."'>".$a->judul."</a></li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                  
                    
                   
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        {{--  <div class='container'>
            <div class='row'>
                <div class='col-md-6 col-xs-3 lang'>
                    <a href='#' class='btn btn-warning'><i class='fa fa-arrow-up'></i></a>
                </div>
            </div>
        </div>  --}}
    </div>
    @stack('js')    
</body>

</html>