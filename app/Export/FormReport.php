<?php
namespace App\Export;
use App\ExcelForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class FormReport implements FromCollection,WithHeadings,ShouldAutoSize
{
    public function collection()
    {

        return ExcelForm::all();
    }

    public function headings(): array
    {
        return[
            'ID',
            'NAMA',
            'ASAL DAERAH',
            'No.KTP',
            'TANGGAL LAHIR',
            'UMUR',
            'PENDIDIKAN',
            'JURUSAN',
            'NILAI',
            'ASAL SEKOLAH',
            'JENIS',
            'JOB',
            'EMAIL',
            'NO HP',
            'ALAMAt',
        ];
    }

    public function events(): array
    {
        $spreedsheet->getActiveSheet()->getStyle('No.KTP')->getNumberFromat()->setFormatCode('0.00');
        return[
            $spreedsheet->getActiveSheet()->getStyle('No.KTP')->getNumberFromat()->setFormatCode('0.00')
        ];
    }

}
