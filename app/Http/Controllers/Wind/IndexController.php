<?php

namespace App\Http\Controllers\Wind;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\WindRepository;
use App\Models\Wind;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    protected $_wind;
    public function __construct(WindRepository $wind)
    {
        $this->_wind = $wind;
    }

    public function index()
    {
      // Device 1
        // Sensor Anemo
        $ANEMO = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/1.json?api_key=FM35EP4FE99QAXFT');
        $json_ANEMO = json_decode($ANEMO, TRUE);
        $data_ANEMO = ($json_ANEMO['feeds']);
        $jml_ANEMO = sizeof($data_ANEMO);
        $jml_arr_ANEMO = $data_ANEMO[$jml_ANEMO-1]['field1'];
        
        // Sensor Wind_direct
        $WIND_DIRECT = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/2.json?api_key=FM35EP4FE99QAXFT');
        $json_WIND_DIRECT = json_decode($WIND_DIRECT, TRUE);
        $data_WIND_DIRECT = ($json_WIND_DIRECT['feeds']);
        $jml_WIND_DIRECT = sizeof($data_WIND_DIRECT);
        $jml_arr_WIND_DIRECT = $data_WIND_DIRECT[$jml_WIND_DIRECT-1]['field2'];
        
        return view("pages.wind.index", compact(
            // view ANEMO
            'data_ANEMO',
            'jml_arr_ANEMO',
            // view WIND_DIRECT
            'data_WIND_DIRECT',
            'jml_arr_WIND_DIRECT'
        ));
    }
}