<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Variação no Valor das Ações</h2>
    <span>Formulário para monitorar a variação no valor das ações da empresa.</span><br><br>
    
    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="variação-ações">

        <label for="data">Data da Análise:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="valor">Valor das Ações:</label><br>
        <input type="number" name="valor" step="0.01" min="0" required><br><br>

        <label for="variacao">Variação %:</label><br>
        <input type="number" name="variacao" step="0.01" min="0" required><br><br>

        <label for="fatores">Fatores Impactantes:</label><br>
        <div>
            <input type="radio" name="fatores" value="Melhora na segurança da informação"> Melhora na segurança da informação<br>
            <input type="radio" name="fatores" value="Lançamento de novos produtos"> Lançamento de novos produtos<br>
            <input type="radio" name="fatores" value="Recuperação da confiança dos clientes"> Recuperação da confiança dos clientes<br>
            <input type="radio" name="fatores" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="fatoresOutro">
        </div><br>

        <label for="acao">Ação de Comunicação:</label><br>
        <div>
            <input type="radio" name="acao" value="Cominicados à imprensa" required> Cominicados à imprensa<br>
            <input type="radio" name="acao" value="Relatórios aos investidores"> Relatórios aos investidores<br>
            <input type="radio" name="acao" value="Atualização no website corporativo"> Atualização no website corporativo<br>
            <input type="radio" name="acao" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="acaoOutro">
        </div><br>

        <button type="submit">Enviar Formulário</button>
    </form>
</body>
</html>