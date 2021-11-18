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
        $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
        $json_MQ7 = json_decode($MQ7, TRUE);
        $data_MQ7 = ($json_MQ7['feeds']);
        $jumlah = sizeof($data_MQ7);
        $jml_arr = $data_MQ7[$jumlah-1]['field1'];
        // $conv_jml_data = (int)$jml_arr;
        // dd($data_MQ7);
        return view("pages.tele1.index", compact('data_MQ7','jml_arr'));
        // return view('pages.tele1.index')->with('nodes_tele_1', $results);
    }

    // public function cetak_pdf()
    // {
    //     $admin = Admin::all();
    //     $pdf = PDF::loadview('pages.admin.cetak_pdf',['Admin'=>$admin]);
    //     return $pdf->download('report-admin.pdf');
    // }
}