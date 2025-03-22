# Análise BSC

### Cenário da atividade

**Violação de dados em uma empresa de tecnologia.**

Uma empresa fictícia chamada **TechSecure**, especializada no desenvolvimento de softwares financeiros, sofreu uma violação de dados. Hackers exploraram vulnerabilidades no sistema interno e roubaram informações sensíveis de 20 mil clientes, incluindo dados bancários.

A liderança da empresa está sob pressão para resolver o problema rapidamente e evitar futuros incidentes. Eles solicitaram à equipe de Governança de TI um plano detalhado que envolva estratégias baseadas no **Balanced Scorecard (BSC)**.

### O que é Análise BSC?

O **Balanced Scorecard (BSC)** é uma metodologia de gestão estratégica que permite monitorar o desempenho organizacional a partir de quatro perspectivas principais:

1. **Financeira:** Avalia o impacto financeiro das decisões e investimentos da empresa.
2. **Clientes:** Mede a satisfação e a fidelização dos clientes.
3. **Processos Internos:** Analisa a eficiência dos processos operacionais e de segurança.
4. **Aprendizado e Crescimento:** Observa o desenvolvimento de talentos, inovação e melhorias contínuas.

Com base nesse modelo, a **TechSecure** busca aplicar a metodologia BSC para fortalecer sua governança de TI, minimizar riscos e restaurar a confiança do mercado.

---

## Como rodar o projeto

Este projeto utiliza PHP para processar formulários e armazenar dados em um arquivo Excel. O PHP permite manipulação de arquivos e geração dinâmica de conteúdo.

### Requisitos

- Versão do **PHP**: 8.1 ou superior.
- Servidor local como **XAMPP**, **WAMP** ou similares.
- **Composer** instalado para gerenciar dependências.

**Instalação do PHP:**

Caso não tenha o PHP instalado, faça o download pelo site oficial:
([PHP](www.php.net/downloads))

Se for utilizar o XAMPP, faça o download pelo site oficial:
([XAMPP](https://www.apachefriends.org/index.html))

**Como executar:**

Caso já tenha o PHP instalado, basta navegar até a pasta do projeto no terminal e rodar:

```
php -S localhost:8000
```

Isso iniciará um servidor local, e você poderá acessar o projeto em `http://localhost:8000/`.

Se estiver usando o XAMPP, basta mover o projeto para a pasta `htdocs` e acessar pelo navegador em `http://localhost/seu-projeto/`.

### Biblioteca PhpSpreadsheet

O projeto utiliza a biblioteca **PhpSpreadsheet** para manipular planilhas Excel.

**Instalação da biblioteca:**

No terminal, execute:
```
composer require phpoffice/phpspreadsheet
```

**Como funciona:**

- Os dados dos formulários são coletados via **POST** e armazenados em um arquivo Excel (xlsx).
- Se o arquivo já existir, ele é atualizado com novos dados.
- O arquivo é salvo na pasta `excel/`.