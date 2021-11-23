<?php

namespace App\Http\Controllers\Quality;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\QualityRepository;
use App\Models\Quality;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    protected $_quality;
    public function __construct(QualityRepository $quality)
    {
        $this->_quality = $quality;
    }

    public function index()
    {
      // Device 1
        // Sensor MQ-7
        $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ7 = json_decode($MQ7, TRUE);
        $data_MQ7 = ($json_MQ7['feeds']);
        $jml_MQ7 = sizeof($data_MQ7);
        $jml_arr_MQ7 = $data_MQ7[$jml_MQ7-1]['field1'];
        // $conv_jml_data = (int)$jml_arr;
        // dd($data_MQ7);

        // Sensor MQ-131
        $MQ131 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ131 = json_decode($MQ131, TRUE);
        $data_MQ131 = ($json_MQ131['feeds']);
        $jml_MQ131 = sizeof($data_MQ131);
        $jml_arr_MQ131 = $data_MQ131[$jml_MQ131-1]['field2'];
        
        // Sensor MQ-136
        $MQ136 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/3.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ136 = json_decode($MQ136, TRUE);
        $data_MQ136 = ($json_MQ136['feeds']);
        $jml_MQ136 = sizeof($data_MQ136);
        $jml_arr_MQ136 = $data_MQ136[$jml_MQ136-1]['field3'];
        
        // Sensor NH3
        $NH3 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/5.json?api_key=1S7HYWX3RR862Y0W');
        $json_NH3 = json_decode($NH3, TRUE);
        $data_NH3 = ($json_NH3['feeds']);
        $jml_NH3 = sizeof($data_NH3);
        $jml_arr_NH3 = $data_NH3[$jml_NH3-1]['field5'];
        
        // Sensor NO2
        $NO2 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/6.json?api_key=1S7HYWX3RR862Y0W');
        $json_NO2 = json_decode($NO2, TRUE);
        $data_NO2 = ($json_NO2['feeds']);
        $jml_NO2 = sizeof($data_NO2);
        $jml_arr_NO2 = $data_NO2[$jml_NO2-1]['field6'];
        
        // Sensor Dust
        $DUST = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/4.json?api_key=1S7HYWX3RR862Y0W');
        $json_DUST = json_decode($DUST, TRUE);
        $data_DUST = ($json_DUST['feeds']);
        $jml_DUST = sizeof($data_DUST);
        $jml_arr_DUST = $data_DUST[$jml_DUST-1]['field4'];
        
        return view("pages.quality.index", compact(
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
            'jml_arr_DUST'
        ));
    }
}