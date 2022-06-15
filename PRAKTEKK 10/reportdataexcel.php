<?php
include('koneksi.php');

// menggunakan library phpspreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// var mengisi kotak-kotak
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Kelas');
$sheet->setCellValue('D1', 'Alamat');

// menggisi kotak-kotak dengan singkat
$query = mysqli_query($koneksi, "select * from tb_siswa");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['nama']);
    $sheet->setCellValue('C' . $i, $row['kelas']);
    $sheet->setCellValue('D' . $i, $row['alamat']);
    $i++;
}
// var array batasan kotak
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:D' . $i)->applyFromArray($styleArray);

// var menyimpan dengan format xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.Xlsx');
