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
                        <h2>Telemetering Device 3</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves">
                        <p>Device 1 berada area titik 1</p>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Data Sensor Kualitas Udara</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>CO:</li>
                                        <li>O3:</li>
                                        <li>H2S:</li>
                                        <li>Dust:</li>
                                        <li>NH3:</li>
                                        <li>NO2:</li>
                                    </ul>

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
                                    <h5 class="card-title">Data Sensor Cuaca</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Temperature:</li>
                                        <li>Humidity:</li>
                                        <li>Pressure:</li>
                                        <li>Rain:</li>
                                    </ul>

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
                                    <h5 class="card-title">Data Sensor Kecepatan dan Arah Angin</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul>
                                        <li>Data pada sensor-sensor diambil pada </li> 
                                        <li>28-12-2021 12:00</li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <li>Wind Speed:</li>
                                        <li>Wind Direction:</li>
                                    </ul>
                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-6">
                  <ul class="features-items">
                      <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/O3.png" alt="Monitoring Kualitas Udara" style="width:95;height:95px;">
                          </div>
                          <br>
                          <div class="right-content">
                            <h8><b>Sensor CO</b></h8>
                            <p><b>DATA :  </b></p>
                          </div>
                      </li>
                      <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                        </div>
                        <div class="right-content">
                            <h8><b>Sensor O3</b></h8>
                            <p><b>DATA :  </b></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                        </div>
                        <div class="right-content">
                            <h8><b>Sensor H2S</b></h8>
                              <p><b>DATA :  </b></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                        </div>
                        <div class="right-content">
                            <h8><b>Sensor Dust</b></h8>
                              <p><b>DATA :  </b></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                        </div>
                        <div class="right-content">
                            <h8><b>Sensor NH3</b></h8>
                              <p><b>DATA :  </b></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                        </div>
                        <div class="right-content">
                            <h8><b>Sensor NO2</b></h8>
                              <p><b>DATA :  </b></p>
                        </div>
                    </li>
                  </ul>
                  
                </div>

                  <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                            </div>
                            <div class="right-content">
                                <h8><b>Sensor Temperature</b></h8>
                              <p><b>DATA :  </b></p>
                            </div>
                        </li>
                        <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                          </div>
                          <div class="right-content">
                            <h8><b>Sensor Humidity</b></h8>
                            <p><b>DATA :  </b></p>
                          </div>
                      </li>
                      <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                          </div>
                          <div class="right-content">
                            <h8><b>Sensor Pressure</b></h8>
                            <p><b>DATA :  </b></p>
                          </div>
                      </li>
                      <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                          </div>
                          <div class="right-content">
                            <h8><b>Sensor Rain</b></h8>
                            <p><b>DATA :  </b></p>
                          </div>
                      </li>
                    </ul>
                  </div>

                  <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                            </div>
                            <div class="right-content">
                                <h8><b>Sensor Wind Speed</b></h8>
                              <p><b>DATA :  </b></p>
                            </div>
                        </li>
                        <li class="feature-item">
                          <div class="left-icon">
                              <img src="{{asset('client_side/assets/')}}/images/dashboard.png" alt="Monitoring Kualitas Udara" style="width:120px;height:120px;">
                          </div>
                          <div class="right-content">
                            <h8><b>Sensor Wind Direction</b></h8>
                            <p><b>DATA :  </b></p>
                          </div>
                      </li>
                      
                    </ul>
                    
                  </div>
                
          
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection