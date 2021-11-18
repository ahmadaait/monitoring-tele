<?php
namespace App\Repositories;
use App\Models\Tele1;

class AdminRepository
{
   public function getPaginate($request)
   {
      $base = new Tele1;
      return $base->get();
   }

   $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1537281/fields/1.json?api_key=VL32957PDVO254CZ');
   $json_MQ7 = json_decode($MQ7, TRUE);
   $data_MQ7 = ($json_MQ7['feeds']);
   $jumlah = sizeof($data_MQ7);


   public function created($request)
   {
      $tele1 = new Tele1;
      $tele1->MQ7 = $request->admin_name;
      // $admin->bank_name = $request->bank_name;
      // $admin->rekening_number = $request->rekening_number;
      // $admin->bank_personal_name = $request->bank_personal_name;
      $tele1->save();
      return $tele1;
   }
  //  public function updated($request, $id)
  //  {
  //     $admin = Admin::find($id);
  //     $admin->admin_name = isset($request->admin_name) ? $request->admin_name: $admin->admin_name;
  //     $admin->bank_name = isset($request->bank_name) ? $request->bank_name: $admin->bank_name;
  //     $admin->rekening_number = isset($request->rekening_number) ? $request->rekening_number: $admin->rekening_number;
  //     $admin->bank_personal_name = isset($request->bank_personal_name) ? $request->bank_personal_name: $admin->bank_personal_name;
  //     $admin->save();
  //     return $admin;
  //  }
  //  public function getById($id)
  //  {
  //     $admin = Admin::find($id);
  //     return $admin;
  //  }
  //  public function deleted($id):void
  //  {
  //     $admin = Admin::find($id);
  //     $admin->delete();
  //  }
}
