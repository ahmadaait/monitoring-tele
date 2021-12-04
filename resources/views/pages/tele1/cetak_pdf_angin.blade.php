<!DOCTYPE html>
<html>
    <head>
        <title>Report Data Keadaan Angin Telemetering Device 1</title>
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
            <h5>Report Data Sensor Keadaan Angin</h5>
        </center>
        <table class='table table-bordered'>
            <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Anemo</th>
                <th>Direction</th>
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
                <td>{{$item->sensor_ANEMO}}</td>
                <td>{{$item->sensor_WIND_DIRECT}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </body>
</html>