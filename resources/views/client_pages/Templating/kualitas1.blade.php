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
                        <h2>Telemetering Device 1 - Iklim</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves" >
                        <p>Anda dapat melakukan telemetering iklim device 1 : Temperature,Humidity,Pressure,Rain</p>
                        <br>
                        <div class="container-fluid" >
                            <div class="row justify-content-center">
                              <div class="col-20">
                                <div class="card">
                                  <div class="card-header">
                                    <h5 class="card-title">Ramalan Cuacass</h5>
                                  </div>
                                  <div class="card-body">

                                    <img src="assets/images/Thingspeak.png" alt="waves">

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
                                    <h5 class="card-title">Visual Sensor Temperature</h5>
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
                                    <h5 class="card-title">Visual Sensor Humidity</h5>
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
                                    <h5 class="card-title">Visual Sensor Pressure</h5>
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
                                    <h5 class="card-title">Visual Sensor Rain Drop</h5>
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