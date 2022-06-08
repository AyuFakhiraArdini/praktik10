<?php
include('koneksidata.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'NO');
$sheet->setCellValue('B1', 'NIK');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'No Ujian');
$sheet->setCellValue('E1', 'Pernah Paud');
$sheet->setCellValue('F1', 'Pernah TK');
$sheet->setCellValue('G1', 'No SKHUN');
$sheet->setCellValue('H1', 'Hobi');
$sheet->setCellValue('I1', 'Nama');
$sheet->setCellValue('J1', 'Jenis Kelamin');
$sheet->setCellValue('K1', 'NISN');
$sheet->setCellValue('L1', 'Tempat Lahir');
$sheet->setCellValue('M1', 'Tanggal Lahir');
$sheet->setCellValue('N1',' Agama');

$query = mysqli_query($koneksi,"select * from tb_pesdik");
$i = 2;
$no=1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nik']);
    $sheet->setCellValue('C'.$i, $row['jp']);
    $sheet->setCellValue('D'.$i, $row['noujian']);
    $sheet->setCellValue('E'.$i, $row['paud']);
    $sheet->setCellValue('F'.$i, $row['tk']);
    $sheet->setCellValue('G'.$i, $row['noskhun']);
    $sheet->setCellValue('H'.$i, $row['hobi']);
    $sheet->setCellValue('I'.$i, $row['nama']);
	$sheet->setCellValue('J'.$i, $row['jk']);
	$sheet->setCellValue('K'.$i, $row['nisn']);	
    $sheet->setCellValue('L'.$i, $row['tempatlahir']);
	$sheet->setCellValue('M'.$i, $row['tanggallahir']);
	$sheet->setCellValue('N'.$i, $row['agama']);
	$i++;
}
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:N'.$i)->applyFromArray($styleArray);
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Peserta Didik Baru.xlsx');
?>