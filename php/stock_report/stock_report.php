<?php

include('../connectivity/connection.php');

use PhpOffice\PhpSpreadsheet\IOFactory;
require '../../composer/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

\PhpOffice\PhpSpreadsheet\Cell\Cell::setValueBinder( new \PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder() );
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('stock.xlsx');
$sheet = $spreadsheet->getActiveSheet();

$sheet_row = 5;

$get_items = mysqli_query($conn,"select * from item");
if(mysqli_num_rows($get_items) > 0){
    while ($row = mysqli_fetch_array($get_items)) {
        $sheet->getCell('A'.$sheet_row)->setValue( $row['item_id'] );
        $sheet->getCell('B'.$sheet_row)->setValue( $row['name']);
        $sheet->getCell('D'.$sheet_row)->setValue( $row['desc']);
        $sheet->getCell('G'.$sheet_row)->setValue( $row['quantity']);
        $sheet->getCell('H'.$sheet_row)->setValue( $row['price']);
        $sheet_row++;
    }
}
else{
    echo"<script>window.alert('Inventory is empty');</script>";
}
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="stock_report.xlsx"');

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    ob_end_clean();
    $writer->save('php://output');