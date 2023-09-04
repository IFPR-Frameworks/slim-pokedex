
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
