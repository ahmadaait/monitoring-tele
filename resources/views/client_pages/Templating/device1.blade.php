@extends('client_pages.Layout.index')
@section('content')
@include('client_pages.Templating.header_device')

<!-- ***** Main Banner Area Start ***** -->
  <!-- ***** Monitoring ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Telemetering Device 1</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves" >
                        <p>Device 1 berada di lokasi sekitar Instalasi Pengolahan Air Limbah (IPAL). Berikut ini adalah cuplikan data dari sensor-sensor yang telah terpasang, klik "Lihat Grafik" untuk melihat detail grafik berdasarkan perubahan waktu</p>
                        <img src="{{asset('client_side/assets/')}}/images/RealTele.jpeg" width="400" height="500">

                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor CO2 : {{$t->sensor_CO}} ppm</li>
                                        <li>Sensor O3 : {{$t->sensor_O3}} ppb</li>
                                        <li>Sensor H2S : {{$t->sensor_H2S}} ppm</li>
                                        <li>Sensor Dust : {{$t->sensor_DUST}}</li>
                                        <li>Sensor NH3 : {{$t->sensor_NH3}} pm</li>
                                        <li>Sensor NO2 : {{$t->sensor_NO2}} ppm</li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div class="main-button" text-align="center">
                                    <a href="https://tirtarona-telemetering.com/kualitas1">Lihat Grafik</a>
                                    <br> <br>
                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Iklim</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li>
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor Suhu : {{$t->sensor_TEMPERATURE}} &deg;C</li>
                                        <li>Sensor Kelembaban : {{$t->sensor_HUMIDITY}} %</li>
                                        <li>Sensor Tekanan Udara : {{$t->sensor_PRESSURE}} hPa</li>
                                        <li>Sensor Hujan : {{$t->sensor_RAIN}} mm(day)</li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div class="main-button" text-align="center">
                                    <a href="https://tirtarona-telemetering.com/iklim1">Lihat Grafik</a>
                                    <br> <br>
                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Angin</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor Kecepatan Angin : {{$t->sensor_WIND_SPEED}} Km/h</li>
                                        <li>Sensor Arah Angin : {{$t->sensor_WIND_DIRECT}} &deg;</li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div class="main-button" text-align="center">
                                    <a href="https://tirtarona-telemetering.com/angin1">Lihat Grafik</a>
                                    <br> <br>
                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection