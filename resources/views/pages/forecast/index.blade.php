@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Prakiraan Cuaca</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="info-box mb-3 col-12 col-sm-6 col-md-3">
          <center>
            <div id="openweathermap-widget-2"></div>
          </center>
        </div>
        <!-- Data Ramalan per hari -->
        <div class="info-box mb-3 col-12 col-sm-6 col-md-2">
         <div class="info-box-content">
            <center>
              <span class="info-box-text">
                @foreach($data_forecast_today as $item)
                  Cuaca Hari ini : {{$item['main']}} <br><br>
                @endforeach
              </span>
            </center>
          </div>
        </div>
        <!-- Data Ramalan 8 Hari (per 3 jam) -->
        <div class="col-lg-12">
          <center>
            <!-- <div id="openweathermap-widget-1"></div> -->
            <a class="weatherwidget-io" href="https://forecast7.com/en/n7d97112d63/malang/" data-label_1="MALANG" data-label_2="RAMALAN CUACA" data-theme="original" >MALANG RAMALAN CUACA</a>
          </center>
        </div>
        <div class="info-box mb-3 col-12 col-sm-6 col-md-5">
          <div class="info-box-content">
            <!-- <center> -->
              <span class="info-box-text">
                @php
                  $no = 1;
                @endphp
                @foreach($data_forecast as $item)
                  {{$no++}}.
                  @foreach($item['weather'] as $w)
                    Cuaca : {{$w['main']}} ||
                  @endforeach
                    Datetime : {{$item['dt_txt']}} <br>
                @endforeach
              </span>
              <span class="info-box-number"></span>
            <!-- </center> -->
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection

<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
  window.myWidgetParam.push({
    id: 2,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-2',
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);
  })();
</script>
<script>
  window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  
  window.myWidgetParam.push({
    id: 1,
    cityid: '1636722',
    appid: 'bcccbaa299b2e0df1fac63f71d3ccdd5',
    units: 'metric',
    containerid: 'openweathermap-widget-1',  
  });
  (function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(script, s);  
  })();
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>