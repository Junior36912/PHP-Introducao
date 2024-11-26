<?php
// Abertura do script PHP - todo código PHP deve começar com '<?php'

// Exibe informações sobre o servidor e a configuração do PHP
// phpinfo(); // Exibe informações detalhadas do PHP, como versão, extensões instaladas, e configuração.

// Variáveis - armazenam dados para serem usados posteriormente
$nome = "Maria"; // Armazena uma string na variável $nome
$idade = 25;     // Armazena um número inteiro na variável $idade
$altura = 1.68;  // Armazena um número decimal (float) na variável $altura

// Imprimindo dados no navegador
echo "Olá, meu nome é $nome, tenho $idade anos e $altura m de altura."; 
// O comando 'echo' exibe texto ou variáveis no navegador. Aspas duplas permitem interpolação de variáveis.


// Comentários em PHP
// Comentário de uma linha - usado para documentar o código
# Outra forma de comentário de uma linha
/*
   Comentário de múltiplas linhas
   usado para blocos de explicação maiores.
*/

// Condicional - Executa diferentes blocos de código com base em uma condição
if ($idade >= 18) {
    echo "<br>Você é maior de idade.";
} else {
    echo "<br>Você é menor de idade.";
}
// O 'if' verifica se a condição dentro dos parênteses é verdadeira. 
// O 'else' é executado se a condição do 'if' for falsa.

// Laço de repetição - executa um bloco de código várias vezes
for ($i = 1; $i <= 5; $i++) {
    echo "<br>Contagem: $i";
}
// O 'for' é usado para repetir ações. Neste caso, imprime números de 1 a 5.

// Arrays - Armazenam múltiplos valores em uma única variável
$frutas = array("Maçã", "Banana", "Laranja"); 
// Um array armazena uma lista de valores.
echo "<br>Fruta favorita: " . $frutas[0]; 
// Os índices começam em 0. Aqui exibimos o primeiro item.

// Laço 'foreach' - Itera sobre arrays
foreach ($frutas as $fruta) {
    echo "<br>Fruta: $fruta";
}
// O 'foreach' percorre cada elemento do array, atribuindo seu valor à variável $fruta.

// Funções - Blocos de código reutilizáveis
function saudacao($nome) {
    return "Olá, $nome! Bem-vindo ao PHP!";
}
// A função 'saudacao' recebe um parâmetro ($nome) e retorna uma string personalizada.
echo "<br>" . saudacao($nome);

// Trabalhando com formulários HTML e requisições POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeFormulario = $_POST['nome'] ?? "Visitante"; 
    // '$_POST' é um array associativo contendo dados enviados por um formulário HTML.
    echo "<br>Nome enviado pelo formulário: $nomeFormulario";
}

?>

<!-- Código HTML pode ser misturado com PHP -->
<!DOCTYPE html>
<html>
<head>
    <title>Introdução ao PHP</title>
</head>
<body>
    <h1>Exemplo de Formulário</h1>
    <!-- Formulário para enviar dados -->
    <form method="POST" action="">
        <!-- Campo de entrada de texto -->
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
