<!DOCTYPE html>
<html>
    <head>
        <title>Report Data Kualitas Udara Telemetering Device 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 8pt;
            }
        </style>
        <center>
            <h5>Report Data Kualitas Udara</h5>
        </center>
        <table class='table table-bordered'>
            <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>MQ7</th>
                <th>MQ131</th>
                <th>MQ136</th>
                <th>NH3</th>
                <th>NO2</th>
                <th>Dust</th>
            </tr>
            </thead>
        <tbody>
        @php 
            $no=1 
        @endphp
        @foreach($Tele1 as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->waktu}}</td>
                <td>{{$item->sensor_MQ7}}</td>
                <td>{{$item->sensor_MQ131}}</td>
                <td>{{$item->sensor_MQ136}}</td>
                <td>{{$item->sensor_NH3}}</td>
                <td>{{$item->sensor_NO2}}</td>
                <td>{{$item->sensor_DUST}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </body>
</html>