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
                        <h2>Telemetering Device 1 - Kualitas Udara</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves" >
                        <p>Anda dapat melakukan telemetering kualitas udara device 1 : CO,O3,H2s,Dust,NH3,NO2</p>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Visual Sensor CO</h5>
                                  </div>
                                  <div class="card-body">

                                  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/charts/1?bgcolor=%23ffffff&color=%230000FF&dynamic=true&results=60&title=Temperature&type=line&update=15&yaxis=deg+C"></iframe>
                                   <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1549471/widgets/382111"></iframe>
         
                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
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
                                    <h5 class="card-title">Visual Sensor O3</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
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
                                    <h5 class="card-title">Visual Sensor H2S</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
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
                                    <h5 class="card-title">Visual Sensor Dust(Debu)</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
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
                                    <h5 class="card-title">Visual Sensor NH3</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
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
                                    <h5 class="card-title">Visual Sensor NO2</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

                                    
                                    <ul>
                                        <li>Data Terakhir : </li>
                                    </ul>

                                </div>
                                 </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        
                        
                        
                    
                    </div>
                </div>
               
                
          
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection