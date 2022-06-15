<?php

// menggunakan library phpspreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// var membuat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// var mengisi kotak A1
$sheet->setCellValue('A1', 'Hello World !');

// var menyimpan dengan format xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
