# atividadeav1-php

## Verificando Números

Este é um simples código em HTML e PHP que permite aos usuários verificar se um número é par ou ímpar.

### Como Funciona

1. Abra o arquivo `index.html` em um navegador web.

2. Digite um número no campo de entrada e clique no botão "Verificar".

3. O sistema irá informar se o número é par ou ímpar.

### Pré-requisitos

- Um navegador web (Google Chrome, Mozilla Firefox, etc.) para executar o código HTML.

- Um servidor web com suporte a PHP para executar o código PHP.

### Como Utilizar

1. Faça o download dos arquivos deste repositório para o seu computador.

2. Abra o arquivo `index.html` em um navegador web.

3. Digite um número no campo de entrada e clique no botão "Verificar".

4. O sistema irá trazer informações sobre o tipo do número escolhido.

### Explicando o código

1. echo "<p>O número $numero é ";**: Esta linha imprime uma mensagem na página HTML, indicando que o código está prestes a verificar se o número é "redondo" ou não. O valor de `$numero` será inserido no lugar da variável dentro da string, devido ao uso de aspas duplas.

2. if ($numero % 10 == 0) { ... } else { ... }**: Esta é uma estrutura condicional em PHP. Ela verifica se o número armazenado na variável `$numero` é divisível por 10 sem deixar resto (ou seja, se é um múltiplo de 10). Se o número for divisível por 10, a condição dentro do `if` será verdadeira e o bloco de código dentro do `if` será executado. Caso contrário, o bloco de código dentro do `else` será executado.

3. echo "redondo.</p>";**: Se o número for divisível por 10, esta linha imprime "redondo." na página HTML. Isso indica que o número é considerado "redondo" de acordo com a lógica do código.

4. echo "não redondo.</p>";**: Se o número não for divisível por 10, esta linha imprime "não redondo." na página HTML. Isso indica que o número não é considerado "redondo" de acordo com a lógica do código.

1. No código PHP, verifiquei se o formulário foi enviado ( isset($_POST['numero'])) e se o campo de entrada não está vazio ( !empty($_POST['numero'])).

2. Caso o formulário tenha sido enviado e o campo de entrada não esteja vazio, o código PHP recupera o número do formulário ( $num = $_POST['numero']) e então verifica se é par ou ímpar, semelhante ao código anterior.


## Verificando número redondo

Este é um simples código em PHP que permite aos usuários verificar se um número é "redondo" ou não. Neste contexto, "redondo" significa que o número é um quadrado perfeito, ou seja, sua raiz quadrada é um número inteiro.

### Explicando o código 

1. `$_SERVER["REQUEST_METHOD"] == "POST"`: Esta condição verifica se o método de requisição HTTP utilizado é POST. O método de requisição POST é comumente usado para enviar dados de formulários HTML.

2. `isset($_POST['verificar_redondo'])`: Esta condição verifica se o campo `verificar_redondo` foi enviado no formulário HTML. Ele verifica se existe uma variável com o nome `verificar_redondo` dentro do array `$_POST`, que contém os dados submetidos via POST.

   - `$_POST` é um array associativo no PHP que contém os dados enviados através do método POST de um formulário HTML. Os índices do array correspondem aos nomes dos campos do formulário.

Se ambas as condições forem verdadeiras (ou seja, se o método de requisição for POST e o campo `verificar_redondo` estiver definido), então o código continua executando:

3. `$numero = $_POST["numero_redondo"];`: Esta linha atribui o valor submetido no campo `numero_redondo` do formulário HTML à variável `$numero`. O campo `numero_redondo` é onde o usuário insere o número que será verificado.

## Verificando número positivo, negativo ou neutro 

Este é um simples código em PHP que permite aos usuários verificar várias propriedades de um número:
1. Se o número é ímpar ou par.
2. Se o número é "redondo" (quadrado perfeito).
3. Se o número é positivo, negativo ou neutro (zero).

### Explicando o código 

1. `$_SERVER["REQUEST_METHOD"] == "POST"`: Esta condição verifica se o método de requisição HTTP usado para enviar os dados do formulário é POST. Em formulários HTML, os dados podem ser enviados através dos métodos GET ou POST, sendo o POST usado principalmente quando os dados são sensíveis ou quando há muitos dados a serem enviados. Essa condição garante que o código só será executado se o formulário for submetido via método POST.

2. `isset($_POST['verificar_positivo'])`: Esta condição verifica se o campo "verificar_positivo" está presente nos dados submetidos do formulário. No HTML, esse campo pode ser um `<input>`, `<button>`, ou qualquer outro elemento que tenha um atributo `name` definido como "verificar_positivo". O `isset()` verifica se esse campo foi enviado no formulário.

## Fontes

1. (https://developer.mozilla.org/en-US/docs/Web/HTML).

2. (https://bruno.art.br/blog/verificar-se-o-numero-e-par-ou-impar-com-php/#:~:text=Para%20identificar%20de%20maneira%20simples,Numero%20Impar%22%3B%20%7D%20%3F%3E).

3. ChatGPT








