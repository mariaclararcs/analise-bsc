<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
</head>
<body>
    <h2>Variação no Valor das Ações</h2>
    <h4>Formulário para monitorar a variação no valor das ações da empresa.</h4>
    
    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="variações-ações">

        <label for="data">Data da Análise:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="valor">Valor das Ações no Período:</label><br>
        <input type="number" name="valor" required><br><br>

        <label for="variacao">Variação %:</label><br>
        <input type="number" name="variacao" required><br><br>

        <label for="fatores">Fatores Impactantes:</label><br>
        <div>
            <input type="radio" name="fatores" value="Melhora na segurança da informação" required> Melhora na segurança da informação<br>
            <input type="radio" name="fatores" value="Lançamento de novos produtos"> Lançamento de novos produtos<br>
            <input type="radio" name="fatores" value="Recuperação da confiança dos clientes"> Recuperação da confiança dos clientes<br>
            <input type="radio" name="fatores" value="Outro (especificar)"> Outro (especificar)
        </div><br>

        <label for="acao">Ação de Comunicação:</label><br>
        <div>
            <input type="radio" name="acao" value="Cominicados à imprensa" required> Cominicados à imprensa<br>
            <input type="radio" name="acao" value="Relatórios aos investidores"> Relatórios aos investidores<br>
            <input type="radio" name="acao" value="Atualização no website corporativo"> Atualização no website corporativo<br>
            <input type="radio" name="acao" value="Outro (especificar)"> Outro (especificar)
        </div><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>