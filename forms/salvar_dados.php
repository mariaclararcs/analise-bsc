<?php
require __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$diretorio = __DIR__ . '/../excel';
$arquivo = $diretorio . '/dados.xlsx';

// Verifica se a pasta "excel" existe, se não, cria
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}

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