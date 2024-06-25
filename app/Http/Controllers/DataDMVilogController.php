<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class DataDMVilogController extends Controller
{
    public function dataDMVilog()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header')->first();
                
        $data = Pembelians::where('tipe_transaksi','dm_vilog')->paginate(5);
                
        return view('admin.page.data-vilog',compact('data', 'settings'));
    }
    
    
    public function statusDMVilog(Request $request,$order_id,$status)
    {
        Pembelians::where('order_id',$order_id)->update(['status' => $status]);
        
        return back();
    }
    
     public function hapusDMVilog(Request $request,$id)
    {
        Pembelians::where('id',$id)->delete();
        
        return back();
    }
}
