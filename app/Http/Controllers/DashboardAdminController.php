<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Pembayarans;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardAdminController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $date = now();
        $currentDate = Carbon::now()->toDateString(); // Format: YYYY-MM-DD
        $dayPlusOne = Carbon::Create($date)->addDays(1);
        $pastWeek = Carbon::create($date)->subWeeks(1);

        $parsingDate = Carbon::parse($date);

        $arrayDate = [];
        $grafik = Pembelians::whereBetween('created_at', [$pastWeek, $dayPlusOne])->orderBy('created_at', 'asc')->get();

        foreach ($grafik as $data) {
            $pembelian = Pembelians::whereDate('created_at', $data->created_at)->count();
            array_push($arrayDate, array('y' => Carbon::parse($data->created_at)->isoFormat('D/M/Y'), 'a' => $pembelian));
        }

        $totalPembelianToday = Pembelians::whereDate('created_at', $currentDate)->sum('harga');
        $banyakPembelianToday = Pembelians::whereDate('created_at', $currentDate)->count();
        $totalPembelianSuccessToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Success')
            ->sum('harga');

        $banyakPembelianSuccessToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Success')
            ->count();

        $totalPembelianBatalToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Batal')
            ->sum('harga');

        $banyakPembelianBatalToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Batal')
            ->count();

        $totalPembelianPendingToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Pending')
            ->sum('harga');

        $banyakPembelianPendingToday = Pembelians::whereDate('created_at', $currentDate)
            ->where('status', 'Pending')
            ->count();

        $totalDepositToday = Deposits::whereDate('created_at', $currentDate)
            ->where('status', 'Success')
            ->sum('jumlah');

        $banyakDepositToday = Deposits::whereDate('created_at', $currentDate)
            ->where('status', 'Success')
            ->count();



        $totalPembelian = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->sum('harga');

        $banyakPembelian = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->count();

        $totalPembelianSuccess = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Success')
            ->sum('harga');

        $banyakPembelianSuccess = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Success')
            ->count();

        $totalPembelianBatal = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Batal')
            ->sum('harga');

        $banyakPembelianBatal = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Batal')
            ->count();

        $totalPembelianPending = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Pending')
            ->sum('harga');

        $banyakPembelianPending = Pembelians::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Pending')
            ->count();

        $totalDeposit = Deposits::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Success')
            ->sum('jumlah');

        $banyakDeposit = Deposits::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Success')
            ->count();


        return view('admin.page.index', [
        
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'total_pembelian_today' => $totalPembelianToday,
            'total_pembelian_pending_today' => $totalPembelianPendingToday,
            'total_pembelian_batal_today' => $totalPembelianBatalToday,
            'total_pembelian_success_today' => $totalPembelianSuccessToday,
            'banyak_pembelian_today' => $banyakPembelianToday,
            'banyak_pembelian_batal_today' => $banyakPembelianBatalToday,
            'banyak_pembelian_pending_today' => $banyakPembelianPendingToday,
            'banyak_pembelian_success_today' => $banyakPembelianSuccessToday,
            'total_deposit_today' => $totalDepositToday,
            'banyak_deposit_today' => $banyakDepositToday,


            'total_pembelian' => Pembelians::where('status', 'Success')->orWhere('status', 'Pending')->orWhere('status', 'Batal')->sum('harga'),
            'total_pembelian_batal' => $totalPembelianBatal,
            'total_pembelian_pending' => $totalPembelianPending,
            'total_pembelian_success' => $totalPembelianSuccess,
            'banyak_pembelian' => Pembayarans::where('status', 'Lunas')->count(),
            'banyak_pembelian_batal' => $banyakPembelianBatal,
            'banyak_pembelian_pending' => $banyakPembelianPending,
            'banyak_pembelian_success' => $banyakPembelianSuccess,
            'total_deposit' => $totalDeposit,
            'banyak_deposit' => $banyakDeposit,
            'total_keseluruhan_pembelian' => Pembelians::sum('harga'),
            'banyak_keseluruhan_pembelian' => Pembelians::count(),
            'total_keseluruhan_pembelian_berhasil' => Pembelians::where('status', 'Success')->sum('harga'),
            'banyak_keseluruhan_pembelian_berhasil' => Pembelians::where('status', 'Success')->count(),
            'total_keseluruhan_pembelian_pending' => Pembelians::where('status', 'Pending')->sum('harga'),
            'banyak_keseluruhan_pembelian_pending' => Pembelians::where('status', 'Pending')->count(),
            'total_keseluruhan_pembelian_batal' => Pembelians::where('status', 'Batal')->sum('harga'),
            'banyak_keseluruhan_pembelian_batal' => Pembelians::where('status', 'Batal')->count(),
            'total_keseluruhan_deposit' => Deposits::where('status', 'Success')->sum('jumlah'),
            'banyak_keseluruhan_deposit' => Deposits::where('status', 'Success')->count(),
            'keuntungan_bersih' => Pembelians::where('status', 'Success')->sum('profit'),
            'morris_data' => json_encode($arrayDate)
        ]);
    }
}
