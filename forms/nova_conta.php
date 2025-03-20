<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
</head>
<body>
    <h2>Abertura de Nova Conta</h2>
    <h4>Formulário para abertura monitoramento na abertura de novas contas.</h4>

    <form action="salvar_dados.php" method="post">
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
            <input type="radio" name="canal" value="Online (site)" required> Online (site)
            <input type="radio" name="canal" value="Aplicativo móvel"> Aplicativo móvel
            <input type="radio" name="canal" value="Atendimento telefônico"> Atendimento telefônico
            <input type="radio" name="canal" value="Outro (especificar)"> Outro (especificar)
        </div><br>

        <label for="status">Status:</label><br>
        <div>
            <input type="radio" name="status" value="Concluída" required> Concluída
            <input type="radio" name="status" value="Pendente"> Pendente
        </div><br>

        <label for="origem">Origem do Cliente:</label><br>
        <div>
            <input type="radio" name="origem" value="Cliente Novo" required> Cliente Novo
            <input type="radio" name="origem" value="Cliente existente em nova conta"> Cliente existente em nova conta
        </div><br>

        <input type="hidden" name="tipo" value="chamado">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>