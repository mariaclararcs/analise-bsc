<?php
require __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$diretorio = __DIR__ . '/../excel';

// Verifica se a pasta "excel" existe, se não, cria
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}

// Obtém o tipo do formulário enviado
$tipo = $_POST['tipo'] ?? 'outro';

// Define o nome do arquivo com base no tipo do formulário
$arquivo = $diretorio . '/' . $tipo . '.xlsx';

// Se o arquivo já existir, carregue-o, senão crie um novo
if (file_exists($arquivo)) {
    $planilha = IOFactory::load($arquivo);
} else {
    $planilha = new Spreadsheet();
    $planilha->getActiveSheet()->setTitle(ucwords(str_replace('-', ' ', $tipo))); // Define o nome da aba
}

// Obtém os dados enviados
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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Dados salvos com sucesso!</h2>
    <span>Os dados do formulário foram salvos no arquivo <strong><?php echo htmlspecialchars($tipo); ?>.xlsx</strong>.</span><br><br>

    <a href="/"><button>Voltar à página principal</button></a>
</body>
</html>