<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise BSC</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <h2>Investimento em Segurança da Informação</h2>
    <span>Formulário para monitorar os investimentos na área de segurança da informação.</span><br><br>
    
    <form action="/forms/salvar_dados.php" method="post">
        <input type="hidden" name="tipo" value="investimento-segurança">

        <label for="data">Data do Investimento:</label><br>
        <input type="date" name="data" required><br><br>

        <label for="categoria">Categoria do Investimento:</label><br>
        <div>
            <input type="radio" name="categoria" value="Compra de software de segurança" required> Compra de software de segurança<br>
            <input type="radio" name="categoria" value="Treinamento de colaboradores"> Treinamento de colaboradores<br>
            <input type="radio" name="categoria" value="Consultoria externa"> Consultoria externa<br>
            <input type="radio" name="categoria" value="Atualização da infraestrutura"> Atualização da infraestrutura<br>
            <input type="radio" name="categoria" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="categoriaOutro">
        </div><br>

        <label for="valor">Valor do Investimento:</label><br>
        <input type="number" name="valor" step="0.01" min="0" required><br><br>

        <label for="area">Área Beneficiada:</label><br>
        <div>
            <input type="radio" name="area" value="Sistema de autenticação" required> Sistema de autenticação<br>
            <input type="radio" name="area" value="Monitoramento de rede"> Monitoramento de rede<br>
            <input type="radio" name="area" value="Criptografia de dados"> Criptografia de dados<br>
            <input type="radio" name="area" value="Proteção contra malware"> Atualização da infraestrutura<br>
            <input type="radio" name="area" value="Outro (especificar)"> Outro (especificar)
            <input type="text" name="areaOutro">
        </div><br>

        <button type="submit">Enviar Formulário</button>
    </form>
</body>
</html>