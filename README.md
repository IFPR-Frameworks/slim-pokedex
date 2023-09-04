
## Pokedex com Slim PHP :elephant:

Esse projetem tem como objetivo fazer uma Pokedex simplificada. Foi construído usando Slim PHP e a biblioteca para gerenciamento de telas (View) PHP View. Os dados dos pokemons são obtidos por meio da consulta de uma API web pública (https://pokeapi.co/)


### Instalação do Slim

```
composer require slim/slim:3.*
```

### Instalação do Gerenciador de Telas

```
composer require slim/php-view
```

### Estrutura Básica

```
<?php 

    require __DIR__ . "/vendor/autoload.php";

    use Slim\App;
    use Slim\Http\Request;
    use Slim\Http\Response;
    use Slim\Views\PhpRenderer;

    $app = new App();

    $app->get("/", function(Request $request, Response $response, $args){

       //Ações a serem executadas ao se chamar a rota

    });

    $app->run();

```

### Usando o projeto existente

Se você desejar, pode baixar e usar o projeto existente. Para isso basta realizar o download do projeto, e dentro da pasta executar o comando:

```
composer install
```


***Observação:** as vezes, após essa operação, é necessário fechar e abrir novamente o VSCode para que o VSCode “passe a conhecer” os novos arquivos baixados;*

**Pronto, o projeto está baixado e configurado!**
