<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Abertura de Nova Conta</h2>
    <span>Formulário para abertura monitoramento na abertura de novas contas.</span><br><br>

    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="nova-conta">

        <label for="data">Data de Abertura:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="tipo">Tipo de Conta:</label><br>
        <div>
            <input type="radio" name="tipo" value="Pessoal" required> Pessoal
            <input type="radio" name="tipo" value="Empresarial"> Empresarial
            <input type="radio" name="tipo" value="Corporativa"> Corporativa
        </div><br>

        <label for="canal">Canal de Abertura:</label><br>
        <div>
            <input type="radio" name="canal" value="Online (site)" required> Online (site)<br>
            <input type="radio" name="canal" value="Aplicativo móvel"> Aplicativo móvel<br>
            <input type="radio" name="canal" value="Atendimento telefônico"> Atendimento telefônico<br>
            <input type="radio" name="canal" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="canalOutro">
        </div><br>

        <label for="status">Status:</label><br>
        <div>
            <input type="radio" name="status" value="Concluída" required> Concluída
            <input type="radio" name="status" value="Pendente"> Pendente
        </div><br>

        <label for="origem">Origem do Cliente:</label><br>
        <div>
            <input type="radio" name="origem" value="Cliente Novo" required> Cliente Novo<br>
            <input type="radio" name="origem" value="Cliente existente em nova conta"> Cliente existente em nova conta
        </div><br>

        <button type="submit">Enviar Formulário</button>
    </form>
</body>
</html>