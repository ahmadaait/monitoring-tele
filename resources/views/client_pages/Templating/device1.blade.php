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
                        <h2>Monitoring Telemetering Device 1</h2>
                        <img src="{{asset('client_side/assets/')}}//images/line-dec.png" alt="waves">
                        <p>Anda dapat melakukan monitoring telemetering device 1 untuk kualitas udara : CO3,</p>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor CO : {{$t->sensor_CO}}</li>
                                        <li>Sensor O3 : {{$t->sensor_O3}}</li>
                                        <li>Sensor H2S : {{$t->sensor_H2S}}</li>
                                        <li>Sensor Dust : {{$t->sensor_DUST}}</li>
                                        <li>Sensor NH3 : {{$t->sensor_NH3}}</li>
                                        <li>Sensor NO2 : {{$t->sensor_NO2}}</li>
                                    </ul>
                                    @endforeach
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
                                    <h5 class="card-title">Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li>
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor Suhu : {{$t->sensor_TEMPERATURE}}</li>
                                        <li>Sensor Kelembaban : {{$t->sensor_HUMIDITY}}</li>
                                        <li>Sensor Tekanan Udara : {{$t->sensor_PRESSURE}}</li>
                                        <li>Sensor Hujan : {{$t->sensor_RAIN}}</li>
                                    </ul>
                                    @endforeach
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
                                    <h5 class="card-title">Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    @foreach($node1 as $t)
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>{{date('Y-m-d H:i:s', strtotime($t->waktu))}}</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Sensor Kecepatan Angin : {{$t->sensor_WIND_SPEED}}</li>
                                        <li>Sensor Arah Angin : {{$t->sensor_WIND_DIRECT}}</li>
                                    </ul>
                                    @endforeach
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