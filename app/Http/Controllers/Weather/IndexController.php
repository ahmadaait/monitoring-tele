<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\WeatherRepository;
use App\Models\Weather;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    protected $_weather;
    public function __construct(WeatherRepository $weather)
    {
        $this->_weather = $weather;
    }

    public function index()
    {
      // Device 1
        // Sensor DHT-22_Temperature
        $DHT22_TEMP = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/1.json?api_key=KHDHDCSC9XKKXMFT');
        $json_DHT22_TEMP = json_decode($DHT22_TEMP, TRUE);
        $data_DHT22_TEMP = ($json_DHT22_TEMP['feeds']);
        $jml_DHT22_TEMP = sizeof($data_DHT22_TEMP);
        $jml_arr_DHT22_TEMP = $data_DHT22_TEMP[$jml_DHT22_TEMP-1]['field1'];
        
        // Sensor DHT-22_Humidity
        $DHT22_HUMID = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/2.json?api_key=KHDHDCSC9XKKXMFT');
        $json_DHT22_HUMID = json_decode($DHT22_HUMID, TRUE);
        $data_DHT22_HUMID = ($json_DHT22_HUMID['feeds']);
        $jml_DHT22_HUMID = sizeof($data_DHT22_HUMID);
        $jml_arr_DHT22_HUMID = $data_DHT22_HUMID[$jml_DHT22_HUMID-1]['field2'];
        
        // Sensor BME280 (Tekanan udara)
        $BME280 = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/3.json?api_key=KHDHDCSC9XKKXMFT');
        $json_BME28O = json_decode($BME280, TRUE);
        $data_BME280 = ($json_BME28O['feeds']);
        $jml_BME280 = sizeof($data_BME280);
        $jml_arr_BME280 = $data_BME280[$jml_BME280-1]['field3'];
        
        // Sensor Rain
        $RAIN = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/4.json?api_key=KHDHDCSC9XKKXMFT');
        $json_RAIN = json_decode($RAIN, TRUE);
        $data_RAIN = ($json_RAIN['feeds']);
        $jml_RAIN = sizeof($data_RAIN);
        $jml_arr_RAIN = $data_RAIN[$jml_RAIN-1]['field4'];
        
        return view("pages.weather.index", compact(
            // ----------------------> Device 1
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
            'jml_arr_RAIN'
        ));
    }
}