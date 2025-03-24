<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Abertura de Chamados</h2>
    <span>Formulário para abertura de chamados relacionados a segurança cibernética.</span><br><br>

    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="abertura-chamado">

        <label for="data">Data de Abertura:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="descricao">Descrição do Problema:</label><br>
        <textarea name="descricao"></textarea><br><br>

        <label for="status">Status:</label><br>
        <div>
            <input type="radio" name="status" value="Concluído"> Concluído
            <input type="radio" name="status" value="Em andamento"> Em andamento
            <input type="radio" name="status" value="Pendente" required> Pendente
        </div><br>

        <label for="responsavel">Responsável:</label><br>
        <input type="text" name="responsavel" required><br><br>

        <label for="prioridade">Prioridade:</label><br>
        <div>
            <input type="radio" name="prioridade" value="Alta" required> Alta
            <input type="radio" name="prioridade" value="Média"> Média
            <input type="radio" name="prioridade" value="Baixa"> Baixa
        </div><br>

        <button type="submit">Enviar Formulário</button>
    </form>
</body>
</html>