<?php

namespace App\Http\Controllers\Tele1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Tele1Repository;
use App\Models\Tele1;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    protected $_tele1;
    public function __construct(Tele1Repository $tele1)
    {
        $this->_tele1 = $tele1;
    }

    public function index()
    {
        // $results =  $this->_tele1->getPaginate($request);
        
        // ---------------> Kualitas Udara
        // Sensor MQ-7
        $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ7 = json_decode($MQ7, TRUE);
        $data_MQ7 = ($json_MQ7['feeds']);
        $jml_MQ7 = sizeof($data_MQ7);
        $jml_arr_MQ7 = $data_MQ7[$jml_MQ7-1]['field1'];
        // $conv_jml_data = (int)$jml_arr;
        // dd($data_MQ7);
        $save_MQ7 = new Tele1;
        $save_MQ7->sensor_MQ7 = $jml_arr_MQ7;
        $save_MQ7->save();

        // Sensor MQ-131
        $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ131 = json_decode($MQ131, TRUE);
        $data_MQ131 = ($json_MQ131['feeds']);
        $jml_MQ131 = sizeof($data_MQ131);
        $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        $save_MQ131 = new Tele1;
        $save_MQ131->sensor_MQ131 = $jml_arr_MQ131;
        $save_MQ131->save();
        
        // Sensor MQ-136
        $MQ136 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/3.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ136 = json_decode($MQ136, TRUE);
        $data_MQ136 = ($json_MQ136['feeds']);
        $jml_MQ136 = sizeof($data_MQ136);
        $jml_arr_MQ136 = $data_MQ136[$jml_MQ136-1]['field3'];
        $save_MQ136 = new Tele1;
        $save_MQ136->sensor_MQ136 = $jml_arr_MQ136;
        $save_MQ136->save();
        
        // Sensor NH3
        $NH3 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/5.json?api_key=1S7HYWX3RR862Y0W');
        $json_NH3 = json_decode($NH3, TRUE);
        $data_NH3 = ($json_NH3['feeds']);
        $jml_NH3 = sizeof($data_NH3);
        $jml_arr_NH3 = $data_NH3[$jml_NH3-1]['field5'];
        $save_NH3 = new Tele1;
        $save_NH3->sensor_NH3 = $jml_arr_NH3;
        $save_NH3->save();

        // Sensor NO2
        $NO2 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/6.json?api_key=1S7HYWX3RR862Y0W');
        $json_NO2 = json_decode($NO2, TRUE);
        $data_NO2 = ($json_NO2['feeds']);
        $jml_NO2 = sizeof($data_NO2);
        $jml_arr_NO2 = $data_NO2[$jml_NO2-1]['field6'];
        $save_NO2 = new Tele1;
        $save_NO2->sensor_NO2 = $jml_arr_NO2;
        $save_NO2->save();

        // Sensor Dust
        $DUST = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/4.json?api_key=1S7HYWX3RR862Y0W');
        $json_DUST = json_decode($DUST, TRUE);
        $data_DUST = ($json_DUST['feeds']);
        $jml_DUST = sizeof($data_DUST);
        $jml_arr_DUST = $data_DUST[$jml_DUST-1]['field4'];
        $save_DUST = new Tele1;
        $save_DUST->sensor_DUST = $jml_arr_DUST;
        $save_DUST->save();

        // ---------------> Cuaca
        // Sensor DHT-22_Temperature
        $DHT22_TEMP = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/1.json?api_key=KHDHDCSC9XKKXMFT');
        $json_DHT22_TEMP = json_decode($DHT22_TEMP, TRUE);
        $data_DHT22_TEMP = ($json_DHT22_TEMP['feeds']);
        $jml_DHT22_TEMP = sizeof($data_DHT22_TEMP);
        $jml_arr_DHT22_TEMP = $data_DHT22_TEMP[$jml_DHT22_TEMP-1]['field1'];
        $save_DHT22_TEMP = new Tele1;
        $save_DHT22_TEMP->sensor_DHT22_TEMP = $jml_arr_DHT22_TEMP;
        $save_DHT22_TEMP->save();

        // Sensor DHT-22_Humidity
        $DHT22_HUMID = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/2.json?api_key=KHDHDCSC9XKKXMFT');
        $json_DHT22_HUMID = json_decode($DHT22_HUMID, TRUE);
        $data_DHT22_HUMID = ($json_DHT22_HUMID['feeds']);
        $jml_DHT22_HUMID = sizeof($data_DHT22_HUMID);
        $jml_arr_DHT22_HUMID = $data_DHT22_HUMID[$jml_DHT22_HUMID-1]['field2'];
        $save_DHT22_HUMID = new Tele1;
        $save_DHT22_HUMID->sensor_DHT22_HUMID = $jml_arr_DHT22_HUMID;
        $save_DHT22_HUMID->save();

        // Sensor BME280 (Tekanan udara)
        $BME280 = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/3.json?api_key=KHDHDCSC9XKKXMFT');
        $json_BME28O = json_decode($BME280, TRUE);
        $data_BME280 = ($json_BME28O['feeds']);
        $jml_BME280 = sizeof($data_BME280);
        $jml_arr_BME280 = $data_BME280[$jml_BME280-1]['field3'];
        $save_BME280 = new Tele1;
        $save_BME280->sensor_BME280 = $jml_arr_BME280;
        $save_BME280->save();

        // Sensor Rain
        $RAIN = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/4.json?api_key=KHDHDCSC9XKKXMFT');
        $json_RAIN = json_decode($RAIN, TRUE);
        $data_RAIN = ($json_RAIN['feeds']);
        $jml_RAIN = sizeof($data_RAIN);
        $jml_arr_RAIN = $data_RAIN[$jml_RAIN-1]['field4'];
        $save_RAIN = new Tele1;
        $save_RAIN->sensor_RAIN = $jml_arr_RAIN;
        $save_RAIN->save();

        // ---------------> Angin
        // Sensor Anemo
        $ANEMO = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/1.json?api_key=FM35EP4FE99QAXFT');
        $json_ANEMO = json_decode($ANEMO, TRUE);
        $data_ANEMO = ($json_ANEMO['feeds']);
        $jml_ANEMO = sizeof($data_ANEMO);
        $jml_arr_ANEMO = $data_ANEMO[$jml_ANEMO-1]['field1'];
        $save_ANEMO = new Tele1;
        $save_ANEMO->sensor_ANEMO = $jml_arr_ANEMO;
        $save_ANEMO->save();

        // Sensor Wind_direct
        $WIND_DIRECT = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/2.json?api_key=FM35EP4FE99QAXFT');
        $json_WIND_DIRECT = json_decode($WIND_DIRECT, TRUE);
        $data_WIND_DIRECT = ($json_WIND_DIRECT['feeds']);
        $jml_WIND_DIRECT = sizeof($data_WIND_DIRECT);
        $jml_arr_WIND_DIRECT = $data_WIND_DIRECT[$jml_WIND_DIRECT-1]['field2'];
        $save_WIND_DIRECT = new Tele1;
        $save_WIND_DIRECT->sensor_WIND_DIRECT = $jml_arr_WIND_DIRECT;
        $save_WIND_DIRECT->save();

        return view("pages.tele1.index", compact(
            // view MQ-7
            'data_MQ7',
            'jml_arr_MQ7',
            // view MQ-131
            'data_MQ131',
            'jml_arr_MQ131',
            // view MQ-136
            'data_MQ136',
            'jml_arr_MQ136',
            // view NH3
            'data_NH3',
            'jml_arr_NH3',
            // view NO2
            'data_NO2',
            'jml_arr_NO2',
            // view DUST
            'data_DUST',
            'jml_arr_DUST',
            // view DHT22_TEMP
            'data_DHT22_TEMP',
            'jml_arr_DHT22_TEMP',
            // view DHT22_HUMID
            'data_DHT22_HUMID',
            'jml_arr_DHT22_HUMID',
            // view BME280
            'data_BME280',
            'jml_arr_BME280',
            // view RAIN
            'data_RAIN',
            'jml_arr_RAIN',
            // view ANEMO
            'data_ANEMO',
            'jml_arr_ANEMO',
            // view WIND_DIRECT
            'data_WIND_DIRECT',
            'jml_arr_WIND_DIRECT'
        ));
        // return view('pages.tele1.index')->with('nodes_tele_1', $results);
    }

    // public function cetak_pdf()
    // {
    //     $admin = Admin::all();
    //     $pdf = PDF::loadview('pages.admin.cetak_pdf',['Admin'=>$admin]);
    //     return $pdf->download('report-admin.pdf');
    // }
}