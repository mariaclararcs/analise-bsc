<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$arquivo = 'excel/dados.xlsx';

// Se o arquivo já existir, carregue-o, senão crie um novo
if (file_exists($arquivo)) {
    $planilha = IOFactory::load($arquivo);
} else {
    $planilha = new Spreadsheet();
}

$tipo = $_POST['tipo'];
$dados = array_values($_POST);

$sheet = $planilha->getActiveSheet();
$ultimaLinha = $sheet->getHighestRow() + 1;

// Escrever os dados no Excel
$coluna = 'A';
foreach ($dados as $dado) {
    $sheet->setCellValue($coluna . $ultimaLinha, $dado);
    $coluna++;
}

// Salvar o arquivo
$writer = IOFactory::createWriter($planilha, 'Xlsx');
$writer->save($arquivo);

echo "Dados salvos com sucesso!";
?>