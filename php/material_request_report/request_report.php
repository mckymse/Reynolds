<?php
session_start();
include('../connectivity/connection.php');

use PhpOffice\PhpSpreadsheet\IOFactory;
require '../../composer/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

\PhpOffice\PhpSpreadsheet\Cell\Cell::setValueBinder( new \PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder() );
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('material_request.xlsx');
$sheet = $spreadsheet->getActiveSheet();

$sheet_row = 15;

$get_items = mysqli_query($conn,"select * from material_request");

if(mysqli_num_rows($get_items) > 0){
    while ($row = mysqli_fetch_array($get_items)) {
        $sheet->getCell('G8')->setValue( $row['request_date']);
        $sheet->getCell('G10')->setValue( $_SESSION["current_user"]);
        $sheet->getCell('B8')->setValue('10');
        $sheet->getCell('B10')->setValue('Chennai');
        $sheet->getCell('A'.$sheet_row)->setValue( $row['request_no'] );
        $sheet->getCell('B'.$sheet_row)->setValue( $row['item_code']);
        $item_code = $row['item_code'];
        $item_details = mysqli_query($conn, "select * from item where item_id = $item_code");
        $inner_row = mysqli_fetch_array($item_details);
        $sheet->getCell('F'.$sheet_row)->setValue( $inner_row['name']);
        $sheet->getCell('H'.$sheet_row)->setValue( $inner_row['desc']);
        $sheet->getCell('J'.$sheet_row)->setValue( $row['units_required']);
        $date = $row['need_date'];
        $sheet->getCell('L'.$sheet_row)->setValue($date);
        $sheet_row++;
    }
}
else{
    echo"<script>window.alert('Add atleat one request to generate report');</script>";
}
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="material_request_report.xlsx"');

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    ob_end_clean();
    $writer->save('php://output');