@extends('pages.layout.index')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="card-header">
          <h1>Grafik Data Node 1</h1>
        </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Kualitas Udara -->
        <div class="card-body">
          <h3>Visualisasi Grafik Monitoring Kualitas Udara</h3>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+CO&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+O3&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+H2S&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Debu&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+NH3&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552290/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+NO2&type=line&update=15"></iframe>
        </div>
        <!-- Cuaca -->
        <div class="card-body">
          <h3>Visualisasi Grafik Monitoring Cuaca</h3>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552257/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Suhu&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552257/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Kelembaban&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552257/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Tekanan&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552257/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Curah+Hujan&type=line&update=15"></iframe>
        </div>
        <!-- Keadaan Angin -->
        <div class="card-body">
          <h3>Visualisasi Grafik Monitoring Kecepatan dan Arah Angin</h3>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552255/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Kecepatan+Angin&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1552255/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Arah+Angin&type=line&update=15"></iframe>
          <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/436403"></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection