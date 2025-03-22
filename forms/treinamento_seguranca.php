<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Treinamento de Colaboradores em Segurança</h2>
    <span>Formulário para monitorar o número de colaboradores treinados em segurança cbernética.</span><br><br>
    
    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="treinamento-colaboradores">

        <label for="data">Data do Treinamento:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="nome">Nome do Colaborador:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="cargo">Cargo do Colaborador:</label><br>
        <input type="text" name="cargo" required><br><br>

        <label for="departamento">Departamento do Colaborador:</label><br>
        <input type="text" name="departamento" required><br><br>

        <label for="tipo">Tipo de Treinamento:</label><br>
        <div>
            <input type="radio" name="tipo" value="Segurança básica" required> Segurança básica<br>
            <input type="radio" name="tipo" value="Detecção de phishing"> Detecção de phishing<br>
            <input type="radio" name="tipo" value="Gestão de incidentes"> Gestão de incidentes<br>
            <input type="radio" name="tipo" value="Resposta de incidentes"> Resposta de incidentes<br>
            <input type="radio" name="tipo" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="tipoOutro">
        </div><br>

        <label for="status">Status:</label><br>
        <div>
            <input type="radio" name="status" value="Concluída" required> Concluída
            <input type="radio" name="status" value="Pendente"> Pendente
        </div><br>

        <button type="submit">Enviar Formulário</button>
    </form>
</body>
</html>