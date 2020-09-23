<?php

namespace App\Exports;

use App\Jadwal;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class RekapExcel implements FromView
{
    public function view(): View
    {
        return view('Staff.ExcelRekapUjian',[
            'jadwal' => Jadwal::all()]);
    }
}
