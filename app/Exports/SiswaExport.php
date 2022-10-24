<?php

namespace App\Exports;

// use App\Invoice;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

// class SiswaExport implements FromCollection
// class SiswaExport implements FromQuery
class SiswaExport implements WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Siswa::all();
    // }

    public function headings(): array
    {
        return Siswa::all()([
            '#',
            'Nama',
            'Sekolah',
        ]);
    }

    // use Exportable;

    // public function __construct(int $year)
    // {
    //     $this->year = $year;
    // }

    // public function query()
    // {
    //     return Siswa::query()->whereYear('created_at', $this->year);
    //     ->join('sekolah', 'sekolah_id', '=', 'id')
    //     ->get();
    // }
}
